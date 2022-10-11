<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;
    public function municipalities(){
        return $this->hasMany(municipality::class,'id');
    }
    public function users(){
        return $this->belongsTo(user1::class,'id');

    }
}