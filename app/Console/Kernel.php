<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('github:update')
                 ->dailyAt('01:00')
                 ->appendOutputTo(storage_path('logs/github.log'));

        /*
            Example Setting Ubuntu Cronjob, command to setup (crontab -e)
            * * * * * cd ~/laravel/project-ideas && php artisan schedule:run >> /dev/null 2>&1


            Example Task Scheduling for Artisan Commands

            $schedule->command('inspire') // Artisan Command

                    // Schedule Frequency Options
                    ->everyMinute() // Run the task every minute
                    ->dailyAt('13:00') // Run the task every day at 13:00
                    ->weeklyOn(1, '8:00') // Run the task every week on Monday at 8:00
                    // Don't forget the default timezone laravel app is UTC (config/app.php)

                    // Append Output to Path storage/logs/inspire.log
                    ->appendOutputTo(storage_path('logs/inspire.log'));


            Useful Links:
            https://laravel.com/docs/7.x/scheduling
            https://www.digitalocean.com/community/tutorials/how-to-use-cron-to-automate-tasks-ubuntu-1804
        */
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
