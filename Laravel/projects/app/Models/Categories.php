<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Categories extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name','slug', 'description', 'image'];

    public function products(){
        return $this->hasMany(Products::class, 'category_id');
    }

    public static function boot(){
        parent::boot();

        static::creating(function($category){
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        
    }
}
