<?php

namespace App\Providers;

use App\Artist;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
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
    public function boot()
    {
        //
        view()->composer(['dashboard', 'cards'], function ($view){

            $artistsall = Artist::all();
            $view->with('artistsall', $artistsall);

        });
    }
}
