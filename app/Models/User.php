<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Front\App\Models\Card;
use Modules\User\App\Models\Comment;
use Modules\User\App\Models\Factor;
use Modules\User\App\Models\Report;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'img'
    ];

    protected $attributes = ['img' =>'/storage/user/unnamed.jpg'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function factors()
    {
        return $this->hasMany(Factor::class, 'user_id', 'id');
    }

    public function comments()
    {

        return $this->hasMany(Comment::class, 'user_id', 'id');

    }

    public function cards()
    {

        return $this->hasMany(Card::class, 'user_id', 'id');

    }

    public function reposts()
    {

        return $this->hasMany(Report::class, 'user_id', 'id');

    }

}
