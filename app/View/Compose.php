<?php

namespace App\View;

use App\View\Data\Cards;
use Illuminate\Support\Facades\View;

class Compose
{
    public function handle()
    {
        View::composer(['*'], Cards::class);
    }
}
