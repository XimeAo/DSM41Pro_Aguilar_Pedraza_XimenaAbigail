<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class image extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'image',
        
        ];
    public function products(){
        return $this->hasOne(product::class,'images_id','id')->withDefault([
            'product'=> 'No existe ningun producto relacionado.'
        ]);

    }
}
