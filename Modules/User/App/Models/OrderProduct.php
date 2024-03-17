<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\App\Models\Product;
use Modules\User\Database\factories\OrderProductFactory;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'price', 'product_id', 'factor_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function factor()
    {
        return $this->belongsTo(Factor::class, 'factor_id', 'id');
    }

}
