<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class municipality extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'municipality',
        //'estates_id'
        ];
    public function estates(){
        return $this->belongsTo(estate::class,'estates_id');
    }
    
    public function users(){
        return $this->hasOne(User::class,'municipalities_id','id');
    }
}