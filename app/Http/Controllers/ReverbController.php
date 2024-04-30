<?php

namespace App\Http\Controllers;

use App\Events\ButtonClick;
use App\Events\Message;
use Illuminate\Http\Request;

class ReverbController extends Controller
{
    public function reverb(Request $request)
    {
        Message::dispatch();
    }
}
