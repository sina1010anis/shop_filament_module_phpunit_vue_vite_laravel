<?php

namespace Modules\Front\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Configuration\Exceptions;
use Modules\Front\Database\factories\CardFactory;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['total_number', 'total_price', 'user_id', 'product_id', 'user_id'];

    public $attribut = ['status' => 0];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(ProductPrice::class, 'product_id', 'id');
    }


    public function hasProduct(int $user_id, int $product_id): bool
    {
        return !! $this->where(['user_id' => $user_id, 'product_id' => $product_id])->exists();
    }

    public function addCard(int $user_id, int $product_id ): bool|\Exception
    {

        $product_price = new ProductPrice();

        if ($product_price->hasProduct($product_id) && auth()->check()) { // Has Product at DataBase ProductPrice and auth check

            $product = $product_price->find($product_id);

            if ($this->hasProduct($user_id, $product_id)) { // Has Product At DataBase Card

                $this->where(['user_id' => $user_id, 'product_id' => $product_id])->increment('total_number', 1);

                $this->where(['user_id' => $user_id, 'product_id' => $product_id])->increment('total_price', $product->price);

            } else {

                $this->create( ['total_number' => 1, 'total_price' => $product->price, 'user_id' => auth()->user()->id, 'product_id' => $product->id]);

            }

            return true;

        }

        throw Exception('Not Product OR auth user');



    }


}
