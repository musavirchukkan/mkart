<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    use HasFactory;
    protected $primaryKey = 'favorite_id';
    protected $fillable = [
        'user_id',
        'product_id',
    ];
    public function product()
    {
        return $this->hasOne(Product::class,'product_id','product_id');
    }
}
