<?php

namespace App\Console\Commands\GithubApi;

use Illuminate\Console\Command;
use App\Console\Commands\GithubApi\GithubApi;

class ViewRateLimit extends GithubApi
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
    protected $description = 'Command description';

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
        // dd($this->sendRequest('rate_limit')->json()['rate']);
        $rate = $this->sendRequest('rate_limit')->json()['rate'];
        $this->table(['limit', 'remaining', 'reset'], [$rate]);
    }
}
