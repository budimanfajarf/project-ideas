<?php

namespace App\Console\Commands\Github;

use App\Tag;
use App\Idea;
use App\Tier;
use App\Github;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use App\API\Github as GithubApi;

class UpdateIdeas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Ideas by fetch data from GitHub API. Models: Ideas, Github, Tier, Tags';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->githubApi = new GithubApi('florinpop17', 'app-ideas');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $apiProjects = $this->githubApi->contents('Projects');

        // Get or Create Tier from Database
        $beginnerTier = Tier::firstOrCreate(['name' => 'Beginner']);
        $intermediateTier = Tier::firstOrCreate(['name' => 'Intermediate']);
        $advancedTier = Tier::firstOrCreate(['name' => 'Advanced']);

        $tags = Tag::whereNotIn('name', ['C', 'Gin', 'Java', 'Spring', 'Go', 'Express', 'R', '.NET'])->take(100)->get();

        foreach ($apiProjects as $apiProject) {
            // Temporary Variables
            $tmpGithub = $tmpIdea = [];

            // Get Tier
            $tmpTier = $apiProject['name'];

            $this->comment("Updating: {$tmpTier} Tier of Project Ideas");

            $apiIdeas = $this->githubApi->contents($apiProject['path']);

            $bar = $this->output->createProgressBar(count($apiIdeas));
            $bar->setFormat("%current%/%max% [%bar%] %percent:3s%% %message%");
            $bar->setMessage('');
            $bar->start();

            foreach ($apiIdeas as $apiIdea) {
                if ($apiIdea['type'] != 'file') {
                    $this->error("Skipped: ".$apiIdea['path']);
                    continue;
                }

                // Get Path [Github]
                $tmpGithub['path'] = $apiIdea['path'];

                // Get Name [Github]
                $tmpGithub['name'] = $apiIdea['name'];

                $bar->setMessage($tmpGithub['path']);

                $apiCommits = $this->githubApi->commits($tmpGithub['path'], 1, 1);

                // Get Commits Json [Github]
                $tmpGithub['commits_json'] = collect($apiCommits)->toJson();

                // Get Commit Date [Github]
                $tmpGithub['date'] = $apiCommits[0]['commit']['author']['date'];
                $tmpGithub['date'] = Carbon::parse($tmpGithub['date'])->toDateTimeString();

                $apiDetailIdea = $this->githubApi->contents($apiIdea['path']);

                // Get Content JSON [Github]
                $tmpGithub['conten_json'] = collect($apiDetailIdea)->toJson();

                // Get Content [Idea]
                $tmpIdea['content'] = base64_decode($apiDetailIdea['content']);

                // Get Name [Idea]
                $tmpIdea['name'] = Str::between($tmpIdea['content'], '#', '**Tier');
                $tmpIdea['name'] = (string) Str::of($tmpIdea['name'])->trim();

                // Get Slug [Idea]
                $tmpIdea['slug'] = Str::of($apiIdea['name'])->before('.md');
                $tmpIdea['slug'] = Str::slug($tmpIdea['slug'], '-');

                // Get Description [Idea]
                $tmpIdea['description'] = Str::after($tmpIdea['content'], $tmpTier);
                $tmpIdea['description'] = (string) Str::of($tmpIdea['description'])->trim();

                // Get Required Description [Idea]
                $tmpIdea['required_description'] = Str::between($tmpIdea['content'], $tmpTier, '## User Stories');
                $tmpIdea['required_description'] = (string) Str::of($tmpIdea['required_description'])->trim();

                // Get Short Description [Idea]
                $tmpIdea['short_description'] = Str::of($tmpIdea['required_description'])->replace("\n", ' ');
                $tmpIdea['short_description'] = Str::substr($tmpIdea['short_description'], 0, 255);

                // Get Additional Description [Idea]
                $tmpIdea['additional_description'] = Str::after($tmpIdea['content'], $tmpIdea['required_description']);
                $tmpIdea['additional_description'] = (string) Str::of($tmpIdea['additional_description'])->trim();

                $github = Github::updateOrCreate(
                    [
                        'name' => $tmpGithub['name']
                    ],
                    [
                        'name' => $tmpGithub['name'],
                        'path' => $tmpGithub['path'],
                        'content_json' => $tmpGithub['conten_json'],
                        'commits_json' => $tmpGithub['commits_json'],
                        'committed_at' => $tmpGithub['date'],
                    ]
                );

                switch ($tmpTier) {
                    case '2-Intermediate':
                        $tier = $intermediateTier;
                        break;
                    case '3-Advanced':
                        $tier = $advancedTier;
                        break;

                    default:
                        $tier = $beginnerTier;
                        break;
                }

                $idea = Idea::updateOrCreate(
                    [
                        'ideaable_id' => $github->id,
                        'ideaable_type' => Github::class
                    ],
                    [
                        'tier_id' => $tier->id,
                        'name' => $tmpIdea['name'],
                        'slug' => $tmpIdea['slug'],
                        'short_description' => $tmpIdea['short_description'],
                        'required_description' => $tmpIdea['required_description'],
                        'additional_description' => $tmpIdea['additional_description'],
                        'description' => $tmpIdea['description'],
                        'content' => $tmpIdea['content'],
                    ]
                );


                $tagsId = collect([]);
                foreach ($tags as $tag) {
                    $containsTags = Str::contains($tmpIdea['content'], [$tag->name, $tag->slug]);
                    if ($containsTags)
                        $tagsId->push($tag->id);
                }

                $idea->tags()->sync($tagsId);

                $bar->advance();
            }

            $bar->finish();
            $this->line('');
        }

        $this->info("Project Ideas from Github API ({$this->githubApi->owner}/{$this->githubApi->repo}) have been updated! 😘 ☕");
    }
}
