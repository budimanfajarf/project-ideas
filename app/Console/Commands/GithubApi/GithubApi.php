<?php

namespace App\Console\Commands\GithubApi;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GithubApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Github API Default';

    protected $token;
    protected $baseUrl = 'https://api.github.com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->token = config('app.github_api_token');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return dd($this->sendRequest()->json());
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    protected function sendRequest($path = null)
    {
        return Http::withHeaders([
            'Authorization' => "token {$this->token}",
        ])
        ->get("{$this->getBaseUrl()}{$path}");
    }

    protected function sendRequestFullUrl($url)
    {
        return Http::withHeaders([
            'Authorization' => "token {$this->token}",
        ])
        ->get($url);
    }
}
