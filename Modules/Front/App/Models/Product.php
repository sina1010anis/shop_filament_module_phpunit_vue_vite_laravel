<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\ProductFactory;
use Modules\User\App\Models\Comment;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'smal_body', 'big_body', 'index_image', 'price', 'keeping', 'location', 'light', 'popularity'];

    public function menu(){

        return $this->belongsTo(Menu::class, 'menu_id', 'id');

    }

    public function sub_menu(){

        return $this->belongsTo(SubMenu::class, 'sub_menu_id', 'id');

    }

    public function product_price()
    {
        return $this->hasMany(ProductPrice::class, 'product_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'product_id', 'id');
    }

    public function hasProduct(int $id): bool
    {
        return !! $this->whereId($id)->exists();
    }


}
