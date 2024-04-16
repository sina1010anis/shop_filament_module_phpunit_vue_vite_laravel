<?php

namespace Modules\User\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\ReportFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'user_id', 'status'];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');

    }

}
