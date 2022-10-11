<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function cars(){
        return $this->belongsTo(car::class,'id');
    }
    public function marks(){
        return $this->hasMany(mark::class,'id');
    }
    public function models(){
        return $this->hasMany(models::class,'id');
    }
    public function categories(){
        return $this->hasMany(category::class,'id');
    }
    public function imeges(){
        return $this->hasMany(image::class,'id');
    }
}
