<?php

namespace App\Providers;

use Filament\Resources\Resource;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentShield\Facades\FilamentShield;
use Filament\Pages\BasePage as Page;
use Filament\Widgets\Widget;
use Illuminate\Support\Str;

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
        //
    }
}
