<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logs:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear log files';

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
        // https://stackoverflow.com/questions/28127495/in-phps-laravel-how-do-i-clear-laravel-log
        if ($this->confirm('Do you wish to continue?')) {
            exec('rm ' . storage_path('logs/*.log'), $output, $return_var);
            if ($return_var == 0)
                $this->info('Logs have been cleared!');
        }
    }
}
