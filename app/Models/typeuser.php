<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeuser extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'type_user',
        
        ];
    public function users(){
        return $this->hasMany(User::class,'typeusers_id','id');
    }
}
