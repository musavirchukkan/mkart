<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id'); //category_table , Product_table
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }


    public function getStatusTextAttribute()
    {
        if ($this->status == 1) {
            return 'Published';
        } elseif ($this->status == 2) {
            return 'Unpublished';
        } else {
            return 'Draft';
        }
    }


    protected $append = ['status_text', 'is_favourite_text'];
}
