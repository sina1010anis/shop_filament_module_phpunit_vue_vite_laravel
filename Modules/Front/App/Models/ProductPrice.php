<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\ProductPriceFactory;

class ProductPrice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['price', 'model', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function card()
    {
        return $this->hasMany(Card::class, 'product_id', 'id');
    }

    public function hasProduct(int $id): bool
    {
        return !! $this->whereId($id)->exists();
    }

}
