<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function News(){
        return $this->hasMany(News::class, 'news_id');
    }
}
