<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'user_id',
        'total_amount',
        'order_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }
}
