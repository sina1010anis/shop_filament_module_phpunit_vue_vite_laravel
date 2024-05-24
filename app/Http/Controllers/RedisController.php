<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index()
    {

        dd(Redis::executeRaw(['georadius', 'loac:shop', '59.61103016542674', '36.31744384564267', '250', 'm', 'DESC', 'WITHDIST']));

    }
}
