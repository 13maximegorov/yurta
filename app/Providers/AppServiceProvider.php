<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\{Settings, Visitor};

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
        // call settings
        config([
            'site' => $this->AppSettings()
        ]);

        // visitor's
        $this->siteVisitor();

    }

    public function AppSettings() {
        $settings = Settings::all();
        foreach ($settings  as $k) {
            $setter[$k->key] = $k->value;
        }
        return $setter;
    }

    public function siteVisitor() {
        $visitor = new Visitor;
        $visitor->ip = request()->ip();
        $visitor->hits = 1;
        $visitor->save();
    }
}
