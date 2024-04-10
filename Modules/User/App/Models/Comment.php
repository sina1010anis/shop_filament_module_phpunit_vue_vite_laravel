<?php

namespace Modules\User\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Modules\Front\App\Models\Product;
use Modules\User\Database\factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'product_id', 'status'];


    public $attribut = ['status' => 0];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id', 'id');
    }

    public function hasComment(int $user_id, int $product_id): bool
    {

        return !! $this->where(['user_id' => $user_id, 'product_id' => $product_id])->exists();

    }

    public function addComment(Request $r, int $user_id, int $product_id): void
    {

        if (!$this->hasComment($user_id, $product_id)) {

            $this->create(['title'=>$r->title, 'body'=>$r->body, 'user_id'=>$user_id, 'product_id'=>$product_id]);

        }

    }
}
