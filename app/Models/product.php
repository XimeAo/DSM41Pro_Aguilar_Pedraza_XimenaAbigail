<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'product',
        'description',
        'price',
        'stock',
        'marks_id',
        'modelos_id',
        'categories_id',
        'images_id'
        ];
   
    public function marks(){
        return $this->belongsTo(mark::class,'marks_id')->withDefault([
            'mark'=> 'No existe ninguna marca relacionada.'
        ]);
    }

    public function modelos(){
        return $this->belongsTo(modelo::class,'modelos_id')->withDefault([
            'modelo'=> 'No existe ningun modelo relacionado.'
        ]);
    }

    public function categories(){
        return $this->belongsTo(category::class,'categories_id')->withDefault([
            'category'=> 'No existe ninguna categoría relacionada.'
        ]);
    }

    public function images(){
        return $this->belongsTo(image::class,'images_id')->withDefault([
            'category'=> 'No existe ninguna imagen relacionada.'
        ]);
    }
    
    public function sales_details(){
        return $this->hasMany(sales_detail::class,'products_id','id');
    }
}
