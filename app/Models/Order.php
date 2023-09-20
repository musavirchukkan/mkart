<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';
    protected $guarded = [];
    public function orderLines()
    {
        return $this->hasMany(OrderLine::class, 'order_id');
    }
}
