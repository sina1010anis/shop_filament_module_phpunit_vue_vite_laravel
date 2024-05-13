<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\ReverbController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/reverb', 'reverb')->name('reverb.view');
Route::post('/reverb', [ReverbController::class, 'reverb'])->name('reverb');
Route::view('/reverb/input', 'reverb_input');
Route::get('/redis', [RedisController::class, 'index']);
// Route::get('/test', function (){

// })

require __DIR__.'/auth.php';
