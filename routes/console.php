<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    echo fake()->name();
})->purpose('Display an inspiring quote')->everyTenMinutes();
