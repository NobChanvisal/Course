<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Authors extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function News(){
        return $this->hasMany(News::class, 'news_id');
    }
}
