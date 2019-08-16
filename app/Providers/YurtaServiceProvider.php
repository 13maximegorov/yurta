<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Navigation;

class YurtaServiceProvider extends ServiceProvider
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
        // call navigation
        $this->topNavigation();
    }

    public function topNavigation() {
        View::composer('layouts.header', function($v) {
            $v->with('nav', Navigation::where('is_active', '0')->get());
        });
    }
}
