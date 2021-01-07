<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Agent;

class AgentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $agent = new Agent();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
}
