<?php

namespace App\Providers;

use App\View\Compose;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        resolve(Compose::class)->handle();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for("r-test", function (Request $request) {
            if (auth()->check()) {

                return Limit::perMinute(200)->by($request->ip());

            }

            return Limit::perMinute(2)->by($request->ip());

        });
    }
}
