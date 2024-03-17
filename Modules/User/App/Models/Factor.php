<?php

namespace Modules\User\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\FactorFactory;

class Factor extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'code_pay', 'user_id', 'price', 'number'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
