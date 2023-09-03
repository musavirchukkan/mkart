<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getStatusTextAttribute()
    {
        return ($this->status == 1) ? 'Active' : 'Inactive';
    }

    public function getIsFavouriteTextAttribute()
    {
        return ($this->is_favourite == 1) ? 'Yes' : 'No';
    }

    protected $append = ['status_text', 'is_favourite_text'];
}
