<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'description', 'image'];

    public function products(){
        return $this->hasMany(Products::class, 'category_id');
    }
}
