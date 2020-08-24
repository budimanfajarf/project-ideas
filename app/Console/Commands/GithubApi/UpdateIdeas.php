<?php

namespace App\Console\Commands\GithubApi;

use Illuminate\Console\Command;
use App\Console\Commands\GithubApi\GithubApi;
use Illuminate\Support\Str;

class UpdateIdeas extends GithubApi
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

    protected $owner = 'florinpop17';
    protected $repo = 'app-ideas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $responseProjects = $this->sendRequest("/repos/{$this->owner}/{$this->repo}/contents/Projects");
        $responseProjects->throw();

        $projects = $responseProjects->json();

        foreach ($projects as $project) {
            // Get Tier [ideas tier]
            $tier = $project['name'];

            $this->info($tier);

            $responseIdeas = $this->sendRequestFullUrl($project['_links']['self']);
            $responseIdeas->throw();

            $ideas = $responseIdeas->json();

            $bar = $this->output->createProgressBar(count($ideas));
            $bar->setFormat("%current%/%max% [%bar%] %percent:3s%% %message%");
            $bar->setMessage('');
            $bar->start();

            foreach ($ideas as $idea) {
                // Get Path [githubs]
                $path = $idea['path'];

                $bar->setMessage($path);

                if ($idea['type'] == 'file') {
                    $responseFile = $this->sendRequestFullUrl($idea['_links']['self']);
                    $responseFile->throw();

                    // Get Json [githubs]
                    $json = $responseFile->json();

                    // Get Content [ideas]
                    $content = base64_decode($json['content']);

                    // Get Name [ideas]
                    $name = Str::between($content, '#', '**Tier');
                    $name = (string) Str::of($name)->trim();

                    // Get Slug [ideas]
                    $slug = Str::of($idea['name'])->before('.md');
                    $slug = Str::slug($slug, '-');

                    // Get Description [ideas]
                    $description = Str::after($content, $tier);
                    $description = (string) Str::of($description)->trim();

                    // Get Required Description [ideas]
                    $requiredDescription = Str::between($content, $tier, '## User Stories');
                    $requiredDescription = (string) Str::of($requiredDescription)->trim();

                    // Get Short Description [ideas]
                    $shortDescription = Str::of($requiredDescription)->replace("\n", ' ');
                    $shortDescription = Str::substr($shortDescription, 0, 255);

                    // Get Additional Description [ideas]
                    $additionalDescription = Str::after($content, $requiredDescription);
                    $additionalDescription = (string) Str::of($additionalDescription)->trim();

                    // Get Commit Date [githubs]
                    $responseCommits = $this->sendRequest("/repos/{$this->owner}/{$this->repo}/commits?path={$json['path']}&page=1&per_page=1");
                    $responseCommits->throw();
                    $commits = $responseCommits->json();
                    $date = $commits[0]['commit']['author']['date'];
                    $date = \Carbon\Carbon::parse($date)->toDateTimeString();
                }

                $bar->advance();
            }

            $bar->finish();
            $this->line('');
        }
    }
}
