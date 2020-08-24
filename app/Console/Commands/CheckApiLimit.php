<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\GithubApiRepository;

class CheckApiLimit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:rate {--limit} {--remaining}';

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

    protected $api;

    public function __construct(GithubApiRepository $githubApi)
    {
        parent::__construct();
        $this->api = $githubApi;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->option('limit') && $this->option('remaining'))
            dd(['limit' => $this->api->getRateLimit(), 'remaining' => $this->api->getRateLimitRemaining()]);
        else if ($this->option('limit'))
            dd($this->api->getRateLimit());
        else if ($this->option('remaining'))
            dd($this->api->getRateLimitRemaining());
        else
            dd($this->api->getRate());
    }
}
