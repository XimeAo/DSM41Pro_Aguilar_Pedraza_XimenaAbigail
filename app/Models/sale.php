<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
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
        return $this->belongsTo(sale_detail::class,'id');
    }
}
