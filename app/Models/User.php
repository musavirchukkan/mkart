<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'user_id';

    public function addresses()
    {
        return $this->hasMany(UserAddress::class, 'user_id', 'user_id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, 'user_id', 'user_id');
    }
    public function order()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }
    public function favorite()
    {
        return $this->hasMany(UserFavorite::class, 'user_id', 'user_id');
    }

}
