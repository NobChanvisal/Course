<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carts extends Model
{
    //
    use hasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function cartItems(){
        return $this->hasMany(CartItems::class, 'cart_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
