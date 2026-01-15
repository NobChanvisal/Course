<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'name',
        'price',
        'discounted_price',
        'category_id',
        'status',
        'description',
        'image'
    ];

    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
