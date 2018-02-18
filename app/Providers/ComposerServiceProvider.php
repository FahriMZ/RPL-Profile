<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Rpl;

class ComposerServiceProvider extends ServiceProvider // Provider untuk menambahkan data ke view app.blade.php
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', function($view) {
            $rpl = Rpl::find(1);
            $view->with('rpl', $rpl);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
