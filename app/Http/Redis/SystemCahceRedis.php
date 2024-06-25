<?php

namespace App\Http\Redis;
use Illuminate\Support\Facades\Redis;

class SystemCahceRedis
{
    public static function remember($key, $ttl, $calback)
    {

        if ($val = Redis::executeRaw(['get', $key])) {

            return $val;

        }

        $data = Redis::executeRaw(['setex', $key, $ttl, $calback()]);

        return $data;

    }
}
