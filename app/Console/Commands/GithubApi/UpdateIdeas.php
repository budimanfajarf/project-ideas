<?php

namespace App\Console\Commands\GithubApi;

use Illuminate\Console\Command;
use App\Console\Commands\GithubApi\GithubApi;

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
                $bar->setMessage($idea['path']);
                $responseMarkdown = $this->sendRequestFullUrl($idea['download_url']);
                $responseMarkdown->throw();

                $bar->advance();
            }

            $bar->finish();
            $this->line('');
        }
    }
}
