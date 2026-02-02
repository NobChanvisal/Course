<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    //
    
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price'
    ];

    public function cart(){
        return $this->belongsTo(Carts::class, 'cart_id');
    }

    public function product(){
        return $this->belongsTo(Products::class, 'product_id');
    }
}