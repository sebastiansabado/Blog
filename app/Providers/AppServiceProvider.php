<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // May 1st 2017, SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; error
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar' , function ($view){

            $archives = \App\Post::archives();

            $tags =  \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives' , 'tags'));

            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {

            return  new Stripe(config('services.stripe.secret'));

        });
    }
}
