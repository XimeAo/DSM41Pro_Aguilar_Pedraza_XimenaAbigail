<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeuser extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasOne(user1::class,'id');
    }
}
