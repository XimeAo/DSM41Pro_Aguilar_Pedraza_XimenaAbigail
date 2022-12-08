<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sale extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'subtotal',
        'iva',
        'total',
        'status',
        'guide_number',
        'users_id'
        ];
    public function sales_details(){
        return $this->hasOne(sale_detail::class,'sales_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'users_id')->withDefault([
            'name'=> 'No existe ningun usuario relacionado.'
        ]);
    }
}
