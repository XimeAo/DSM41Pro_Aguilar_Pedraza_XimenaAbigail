<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    use HasFactory;
    protected $fillable =[
        'slug',
        'name'
    ];
    protected $guarded= [
        'states_id'
    ];

    public function estates(){
        return $this->hasMany(estate::class,'id');
    }   
    public function typeusers(){
        return $this->belongsTo(typeuser::class,'id');
    }
}