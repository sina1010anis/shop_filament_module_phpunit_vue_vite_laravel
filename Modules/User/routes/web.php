<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/user')->as('user.')->middleware(['auth'])->group(function (){
    Route::get('/test', [UserController::class, 'index']);
    Route::post('/new/comment/{product_id}', [UserController::class, 'newComment'])->name('new.comment');

    Route::view('/', 'user::index')->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});


