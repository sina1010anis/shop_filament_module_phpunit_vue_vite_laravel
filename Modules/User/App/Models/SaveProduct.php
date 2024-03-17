<?php

namespace Modules\User\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\App\Models\Product;
use Modules\User\Database\factories\SaveProductFactory;

class SaveProduct extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function factor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
