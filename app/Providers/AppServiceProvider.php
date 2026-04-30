<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ColourSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
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
        $colors = Cache::rememberForever('theme_settings', function () {
            return ColourSetting::first();
        });

        View::share('colors', $colors);
    }
}
