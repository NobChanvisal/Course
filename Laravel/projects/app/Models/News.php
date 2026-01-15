<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'authors_id',
        'title',
        'description',
        'status',
        'thumbnail'
    ];

    //news belongs to one category
    public function Categories(){
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function Authors(){
        return $this->belongsTo(Authors::class, 'authors_id');
    }

}
