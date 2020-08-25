<?php

namespace App\Console\Commands\GithubApi;

use Illuminate\Console\Command;
use App\Console\Commands\GithubApi\GithubApi;
use App\API\Github;

class ViewRateLimit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:rate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display Rate Limit Github API';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $api;

    public function __construct(Github $github)
    {
        parent::__construct();
        $this->api = $github;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // dd($this->api->getToPath('/rate_limit')->json()['rate']);
        // $rate = $this->sendRequest('/rate_limit')->json()['rate'];
        // $this->table(['limit', 'remaining', 'reset'], [$rate]);
        // dd($this->api->client()->get('https://api.github.com'));
        // dd($this->api->baseUrl);
        dd($this->api->client()->get('https://api.github.com'));
        // dd($this->api->client);
    }
}
