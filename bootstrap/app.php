<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
        then: function () {
            Route::middleware('')->group(base_path('routes/admin.php'));
        }
    )->withRouting(
        web:__DIR__.'/../routes/redis.php',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->web(['throttle:r-test']);
        $middleware->alias([
            'Payment' => Shetabit\Payment\Facade\Payment::class,
            'Redis' => Redis::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
