<?php

namespace App\Providers;

use App\Entities\ImageLibrary;
use App\Observers\ImageLibraryObserver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        ImageLibrary::observe(ImageLibraryObserver::class);

        // force HTTPS in production
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        $config = DB::table("config_footer")->first();
        View::share('config_footer', $config);

    }
}
