<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product',
        'description',
        'price',
        'stock',
        'photo',
        'marks_id',
        'modelos_id',
        'categories_id'
        ];
   
    public function marks(){
        return $this->hasMany(mark::class,'id');
    }
    public function modelos(){
        return $this->hasMany(modelo::class,'id');
    }
    public function categories(){
        return $this->hasMany(category::class,'id');
    }
    public function imeges(){
        return $this->hasMany(image::class,'id');
    }
}
