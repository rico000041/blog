<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use \App\Billing\Stripe;
use App\Tag;
use App\Post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layouts.sidebar', function($view){

        $view->with('archives',Post::archives());
        $view->with('tags',Tag::pluck('name'));


        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      
        $this->app->singleton(Stripe::class, function(){

            return  new Stripe(config('services.stripe.secret'));
        }); 

    }
}
