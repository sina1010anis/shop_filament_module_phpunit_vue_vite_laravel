<?php

namespace App\Http\Redis;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\View\Components\Info;

class CahceEloquents implements interfaceElouents
{

    public $interfaceElouents;
    public function __construct(interfaceElouents $interfaceElouents)
    {
        $this->interfaceElouents = $interfaceElouents;
    }

    public function all()
    {

        SystemCahceRedis::remember('user', 60, function () {

            return User::all();

        });

    }

}
