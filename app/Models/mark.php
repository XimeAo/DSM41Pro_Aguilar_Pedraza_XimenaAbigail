<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mark extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'mark',
        
        ];
    public function modelos(){
        return $this->hasMany(modelo::class,'marks_id','id');
    }
    public function products(){
        return $this->hasMany(product::class,'marks_id','id');
    }
}
