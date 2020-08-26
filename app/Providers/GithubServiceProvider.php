<?php

namespace App\Providers;

use App\API\Github;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

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
            return new Github();
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
