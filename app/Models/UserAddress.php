<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $primaryKey = 'address_id';
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'house_name',
        'street',
        'city',
        'state',
        'pincode',
        'country',
        'phone',
        'email',
    ];
}
