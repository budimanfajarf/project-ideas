<?php

namespace App\Console\Commands\Github;

use Illuminate\Console\Command;
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
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->github = new Github;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rate = $this->github->rate();
        $this->table(['limit', 'remaining', 'reset'], [$rate]);
    }
}
