<?php

namespace Inurture\Providers;

use Illuminate\Support\ServiceProvider;
use Inurture\Services\Api\GuzzleHttpService;
use Inurture\Services\Api\Contracts\ApiServiceInterface;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApiServiceInterface::class,function($app){
        $guzzle = new \GuzzleHttp\Client();
            return new GuzzleHttpService($guzzle);
        });
    }
}
