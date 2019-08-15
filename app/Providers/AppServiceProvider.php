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
        $ip_address = request()->ip();
        $location = \Location::get($ip_address);
        $user = Visitor::where('ip', $ip_address)->first();
        $map = 'Not found';

        if (!empty($location->regionName) && !empty($location->cityName)) {
            $map = $location->cityName . ', ' . $location->regionName;
        } 

        if (!$user) {
            $visitor = new Visitor;
            $visitor->ip = $ip_address;
            $visitor->location = $map;
            $visitor->hits = 1;
            $visitor->save(); 
        } else {
            Visitor::where('ip', $ip_address)->update(['hits' => $user->hits + 1]);
        }
        
    }
}
