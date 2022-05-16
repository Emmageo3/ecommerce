<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Souscategory;
use View;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        View::composer('*', function($view)
        {
            $categories= Category::all();
            $view->with('categories', $categories);

        });
        View::composer('*', function($view2)
        {
            $souscategories= Souscategory::paginate(5);
            $view2->with('souscategories', $souscategories);

        });
    }
}
