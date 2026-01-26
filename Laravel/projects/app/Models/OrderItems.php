<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price'
    ];

    public function order()
    {
        return $this->belongsTo(Orders::class,'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
