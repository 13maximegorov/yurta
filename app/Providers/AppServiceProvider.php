<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;

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

    }

    public function AppSettings() {
        $settings = Settings::all();
        foreach ($settings  as $k) {
            $setter[$k->key] = $k->value;
        }
        return $setter;
    }
}
