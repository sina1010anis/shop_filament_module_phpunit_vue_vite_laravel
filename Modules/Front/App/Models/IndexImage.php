<?php

namespace Modules\Front\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\IndexImageFactory;

class IndexImage extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'src', 'location'];

}
