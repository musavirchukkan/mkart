<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'image_id';
    protected $fillable = [
        'url', 'product_id'
    ];
    public function product()
    {
    return $this->belongsTo('App\Product', 'product_id');
    }
}
