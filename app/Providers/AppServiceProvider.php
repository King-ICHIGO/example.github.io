<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Databasa\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Models::preventlazyLoading();

       // Gate::define('edit-job' , function (User $user))
    }
}
 