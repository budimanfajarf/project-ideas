<?php

namespace App\Providers;

use App\API\Github;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Http;

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
            // $client = $app->make(Http::class);
            return new Github(config('services.github.token'), "https://api.github.com"
            // , $client
        );
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
