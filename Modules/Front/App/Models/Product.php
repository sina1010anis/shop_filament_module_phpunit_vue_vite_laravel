<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'smal_body', 'big_body', 'index_image', 'price'];

}
