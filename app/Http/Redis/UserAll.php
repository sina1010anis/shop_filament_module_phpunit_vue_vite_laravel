<?php

namespace App\Http\Redis;

use App\Models\User;

class UserAll implements interfaceElouents
{
    public function all()
    {
        return User::all();
    }
}
