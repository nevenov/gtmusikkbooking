<?php

namespace App\Providers;

use App\Artist;
use App\Category;
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
        view()->composer(['dashboard', 'cards', 'artist'], function ($view){

            $artistsall = Artist::all();
            $view->with('artistsall', $artistsall);

            $categoriesall = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();
            $view->with('categoriesall', $categoriesall);

            $subcategoriesall = Category::where('parent_id', '>', 0)->get();
            $view->with('subcategoriesall', $subcategoriesall);

        });
    }
}
