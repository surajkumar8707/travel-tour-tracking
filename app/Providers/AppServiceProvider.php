<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\View;


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
        Paginator::useBootstrap();
        Builder::useVite();

        $settings = getSettings(); // Fetch the settings
        $social = getSocialMediaLink();

        // Share $settings globally with all views
        View::share('settings', $settings);
        View::share('social', $social);

    }
}
