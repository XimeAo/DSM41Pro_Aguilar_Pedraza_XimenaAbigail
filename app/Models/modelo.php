<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    use HasFactory;

    public function marks(){
        return $this->belongsTo(mark::class,'id');
    }
    public function products(){
        return $this->belongsTo(product::class,'id');
    }
}
