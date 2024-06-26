<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\MenuFactory;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'mode', 'src', 'link'];


    public function sub_menus()
    {
        return $this->hasMany(SubMenu::class, 'menu_id', 'id');
    }

    public function products(){

        return $this->hasMany(Product::class, 'menu_id', 'id');

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
