<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        Filament::serving(function () {
            /** @phpstan-ignore-next-line  */
            Filament::registerNavigationItems([
                NavigationItem::make('Swagger')
                    ->url('/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-cursor-arrow-rays')
                    ->group('Links')
                    ->sort(3),
                NavigationItem::make('Project on GitHub')
                    ->url('https://github.com/gomzyakov/laravel-blog', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt')
                    ->group('Links')
                    ->sort(3),
            ]);
        });
    }
}
