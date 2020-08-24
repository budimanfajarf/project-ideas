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
        // $this->info(var_dump($this->api->getLimit($option)));
        // $arguments = $this->arguments();
        // $this->info(var_dump($this->argument));
        // $this->argument('limit');
        // $this->info($this->argument('option'));
        // dd((bool) $this->argument('user'));
        // dd($this->arguments());
        // dd($this->options());
        // return dd($this->arguments());

        return dd($this->api->getRate());
    }
}
