<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index()
    {

        // for ($i = 1 ; $i <= 50 ; $i++) {

        //     Redis::executeRaw(['zadd', 'x:'.$i, '1', 'data-ones']);

        //     for ($j = 1 ; $j < 10 ; $j++) {

        //         Redis::executeRaw(['zadd', 'x:'.$i, $j, fake()->name()]);

        //     }

        // }

        for ($i = 1 ; $i <= 50 ; $i++) {

            echo '<pre>';

            print_r(Redis::executeRaw(['zrevrange', 'x:'.$i, '0', '9', 'WITHSCORES']));

            echo '</pre>';

        }

    }
}
