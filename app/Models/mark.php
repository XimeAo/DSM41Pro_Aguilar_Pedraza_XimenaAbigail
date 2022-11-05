<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'mark',
        
        ];
    public function modelos(){
        return $this->hasMany(modelo::class,'id');
    }
    public function products(){
        return $this->belongsTo(product::class,'id');
    }
}
