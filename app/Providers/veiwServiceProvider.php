<?php

namespace App\Providers;

use App\Models\cat;
use Illuminate\Support\ServiceProvider;

class veiwServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Front.inc.header',function($view){

            $view->with('cats',cat::select('id','name')->get());


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
