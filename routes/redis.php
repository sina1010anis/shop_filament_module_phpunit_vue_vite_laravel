<?php
use App\Http\Redis\CahceEloquents;
use App\Http\Redis\UserAll;

Route::get('/test_test', function () {

    $cache = new CahceEloquents(new UserAll());

    dd($cache->all());

});
