<?php

namespace App\Http\Controllers;

use App\Events\ButtonClick;
use Illuminate\Http\Request;

class ReverbController extends Controller
{
    public function reverb()
    {
        ButtonClick::dispatch('Test')
    }
}
