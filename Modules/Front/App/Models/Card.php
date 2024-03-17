<?php

namespace Modules\Front\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\CardFactory;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['total_number', 'total_price', 'user_id', 'product_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
