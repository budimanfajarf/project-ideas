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
    protected $description = 'Command description';

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
        $projects = $this->githubApi->contents('Projects');
        $projects = collect($projects)->recursive();

        // Get or Create Tier from Database
        $beginner = Tier::firstOrCreate(['name' => 'Beginner']);
        $intermediate = Tier::firstOrCreate(['name' => 'Intermediate']);
        $advanced = Tier::firstOrCreate(['name' => 'Advanced']);

        // https://laravel.com/docs/7.x/collections#lazy-collection-methods
        // $theTags = Tag::cursor()->remember();
        // $theTags->take(50)->all();

        $theTags = Tag::whereNotIn('name', ['C', 'Gin', 'Java', 'Spring', 'Go', 'Express', 'R'])->take(50)->get();

        foreach ($projects as $key => $project) {
            $number = $key+1;

            // Get Tier [Idea]
            $tier = $project['name'];
            $tier = Str::after($tier, "{$number}-");

            $this->comment($tier);

            $ideas = $this->githubApi->contents($project['path']);

            $bar = $this->output->createProgressBar(count($ideas));
            $bar->setFormat("%current%/%max% [%bar%] %percent:3s%% %message%");
            $bar->setMessage('');
            $bar->start();

            foreach ($ideas as $idea) {
                if ($idea['type'] != 'file') {
                    $bar->setMessage("SKIPPED: ".$idea['path']);
                    continue;
                }

                // Get Path [Github]
                $path = $idea['path'];

                // Get Name [Github]
                $githubName = $idea['name'];

                $bar->setMessage($path);

                $commits = $this->githubApi->commits($path, 1, 1);

                // Get Commits Json [Github]
                $commitsJson = collect($commits)->toJson();

                // Get Commit Date [Github]
                $date = $commits[0]['commit']['author']['date'];
                $date = Carbon::parse($date)->toDateTimeString();

                $detailIdea = $this->githubApi->contents($idea['path']);

                // Get Content JSON [Github]
                $contentJson = collect($detailIdea)->toJson();

                // Get Content [Idea]
                $content = base64_decode($detailIdea['content']);

                // Get Name [Idea]
                $name = Str::between($content, '#', '**Tier');
                $name = (string) Str::of($name)->trim();

                // Get Slug [Idea]
                $slug = Str::of($idea['name'])->before('.md');
                $slug = Str::slug($slug, '-');

                // Get Description [Idea]
                $description = Str::after($content, $tier);
                $description = (string) Str::of($description)->trim();

                // Get Required Description [Idea]
                $requiredDescription = Str::between($content, $tier, '## User Stories');
                $requiredDescription = (string) Str::of($requiredDescription)->trim();

                // Get Short Description [Idea]
                $shortDescription = Str::of($requiredDescription)->replace("\n", ' ');
                $shortDescription = Str::substr($shortDescription, 0, 255);

                // Get Additional Description [Idea]
                $additionalDescription = Str::after($content, $requiredDescription);
                $additionalDescription = (string) Str::of($additionalDescription)->trim();

                $github = Github::updateOrCreate(
                    [
                        'name' => $githubName
                    ],
                    [
                        'name' => $githubName,
                        'path' => $path,
                        'content_json' => $contentJson,
                        'commits_json' => $commitsJson,
                        'committed_at' => $date,
                    ]
                );

                switch ($tier) {
                    case 'Intermediate':
                        $theTier = $intermediate;
                        break;
                    case 'Advanced':
                        $theTier = $advanced;
                        break;

                    default:
                        $theTier = $beginner;
                        break;
                }

                $theIdea = Idea::updateOrCreate(
                    [
                        'ideaable_id' => $github->id,
                        'ideaable_type' => 'App\Github'
                    ],
                    [
                        'tier_id' => $theTier->id,
                        'name' => $name,
                        'slug' => $slug,
                        'short_description' => $shortDescription,
                        'required_description' => $requiredDescription,
                        'additional_description' => $additionalDescription,
                        'description' => $description,
                        'content' => $content,
                    ]
                );

                // $lowerCaseContent = Str::lower($content);

                $tagsId = collect([]);
                foreach ($theTags as $theTag) {
                    // $lowerCaseTagName = Str::lower($theTag->name);
                    // $containsTags = Str::contains($lowerCaseContent, [$lowerCaseTagName, $theTag->slug]);

                    $containsTags = Str::contains($content, [$theTag->name, $theTag->slug]);

                    if ($containsTags)
                        $tagsId->push($theTag->id);

                }

                $theIdea->tags()->sync($tagsId);

                $bar->advance();
            }

            $bar->finish();
            $this->line('');
        }
    }
}
