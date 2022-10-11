<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale_detail extends Model
{
    use HasFactory;
    public function sales(){
        return $this->hasOne(sale::class,'id');
    }
    public function products(){
        return $this->hasMany(product::class,'id');
    }
}