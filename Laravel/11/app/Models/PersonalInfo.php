<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    
    //
    protected $table = 'personal_info';
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'DOB',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
