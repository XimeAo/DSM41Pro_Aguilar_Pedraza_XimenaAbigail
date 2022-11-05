<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'password',
        'email',
        'birthday',
        'sex',
        'location',
        'street',
        'outdoor_number',
        'indoor_number',
        'postal_code',
        'between_streets',
        'estates_id',
        'typeusers_id'

        ];

    public function estates(){
        return $this->hasMany(estate::class,'id');
    }   
    public function typeusers(){
        return $this->hasOne(typeuser::class,'id');
    }
}