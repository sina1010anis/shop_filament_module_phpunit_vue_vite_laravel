<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function redis()
    {

        $key = Redis::incrBy('key:test', 10);

        return $key;



        // Build Data in Redis For RedisSearch (Start)
            // for ($i = 0 ; $i <= 150 ; $i++) {

            //     $location = fake()->localCoordinates();

            //     Redis::executeRaw(['hset', 'shop:car_'.$i, 'name', fake()->name(), 'price', rand(1000, 9999), 'location', "[".$location['longitude'].",".$location['latitude']."]", 'Descreption', fake()->text(500)]);

            // }
        // Build Data in Redis For RedisSearch (end)

        // Change Hash -> Index Redis (start)
            // Redis::executeRaw(['ft.create', 'idx_shop_car', 'on', 'hash', 'prefix', '1', 'shop:car_', 'schema', 'name', 'TEXT', 'price', 'NUMERIC', 'location', 'GEO', 'Descreption', 'TEXT']);
        // Change Hash -> Index Redis (end)

        // Show index (start)
            // dd(Redis::executeRaw(['ft.info', 'idx_shop_car']));
        // Show index (end)

        // Search In index Redis (start)
            // dd(Redis::executeRaw(['FT.SEARCH', 'idx_shop_car', '@Descreption:%%T%%']))
        // Search In index Redis (end)



        // dd(Redis::executeRaw(['georadius', 'loac:shop', '59.61103016542674', '36.31744384564267', '250', 'm', 'DESC', 'WITHDIST'])); //

    }

    public function mysql()
    {

        dd(User::first());

    }
}
