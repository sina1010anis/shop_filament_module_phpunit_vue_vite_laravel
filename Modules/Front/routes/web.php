<?php

use Illuminate\Support\Facades\Route;
use Modules\Front\App\Http\Controllers\FrontController;

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


Route::prefix('/')->as('front.')->group(function (){

    Route::get('', [FrontController::class, 'index'])->name('index');

    Route::get('/logout', function() {
        auth()->logout();
    });

    Route::post('get/data/menu', [FrontController::class, 'getDataMenu'])->name('get_data_menu');

    Route::get('/product/{product}', [FrontController::class, 'viewProduct'])->name('view_product');

    Route::post('/send/card/product', [FrontController::class, 'sendCardProduct'])->name('send_card_product');

    Route::post('/save/vote/{product_id}', [FrontController::class, 'saveVote'])->name('save.vote');

});

