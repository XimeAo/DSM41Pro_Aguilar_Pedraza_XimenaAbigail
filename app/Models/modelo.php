<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modelo extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'year',
        'model',
        'marks_id'
        ];

    public function marks(){
        return $this->belongsTo(mark::class,'marks_id')->withDefault([
            'mark'=> 'No existe ninguna marca relacionada.'
        ]);
    }
    public function products(){
        return $this->hasMany(product::class,'modelos_id','id');
    }
}
