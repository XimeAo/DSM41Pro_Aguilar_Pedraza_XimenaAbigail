<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'quantity',
        'price',
        'sales_id',
        'products_id'
        ];
    public function sales(){
        return $this->hasOne(sale::class,'id');
    }
    public function products(){
        return $this->hasMany(product::class,'id');
    }
}