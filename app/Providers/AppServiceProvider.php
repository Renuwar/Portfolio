<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Biodata;

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
        // Make $biodata available in all views
        View::composer('*', function ($view) {
            $biodata = Biodata::first() ?? (object)[
                'nama' => 'Your Name',
                'email' => 'email@example.com',
                'telepon' => '08123456789',
                'alamat' => 'Your Address',
            ];
            $view->with('biodata', $biodata);
        });
    }
}
