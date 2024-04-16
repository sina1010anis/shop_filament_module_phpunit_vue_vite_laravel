<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test-11', function () {
    return 'test';
});

require __DIR__.'/auth.php';
