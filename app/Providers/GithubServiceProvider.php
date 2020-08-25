<?php

namespace App\Providers;

use App\API\Github;
use Illuminate\Support\ServiceProvider;

class GithubServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Github::class, function($app) {
            $endpoint = config('services.github.endpoint');
            return new Github(config('services.github.token'), "https://{$endpoint}");
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
