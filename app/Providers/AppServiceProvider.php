<?php

namespace App\Providers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
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
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        Blade::componentNamespace('App\\View\\Components', 'frontend');

        // Share services data ke header component
        View::composer('components.frontend.frontend-header', function ($view) {
            $view->with('services', Service::where('is_personal_training', false)->get());
        });
    }
}
