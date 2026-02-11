<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'price',
        'price_type',
        'discounted_price',
        'category_id',
        'status',
        'description',
        'image'
    ];

    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }
        public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'product_id');
    }

    public static function boot(){
        parent::boot();

        static::creating(function($product){
            $product->slug = \Illuminate\Support\Str::slug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = \Illuminate\Support\Str::slug($product->name);
        });
    }
}
