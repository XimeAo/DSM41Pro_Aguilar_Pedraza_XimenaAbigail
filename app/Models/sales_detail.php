<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sales_detail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'quantity',
        'price',
        'sales_id',
        'products_id'
        ];
    public function sales(){
        return $this->belongsTo(sale::class,'sales_id');
    }
    public function products(){
        return $this->belongsTo(product::class,'products_id');
    }
}