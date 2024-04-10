<?php

namespace App\View\Data;

use Modules\Front\App\Models\Card;

class Cards {
    public function compose(\Illuminate\View\View $view)
    {
        if (auth()->check()) {

            return $view->with('crads_compose', Card::orderBy('id', 'desc')->where(['user_id'=>auth()->user()->id, 'status' => 1])->get());

        }
    }
}
