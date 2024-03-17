<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\SubMenuFactory;

class SubMenu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'menu_id', 'src'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

}
