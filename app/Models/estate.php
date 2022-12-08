<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estate extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'state',
        ];
    public function municipalities(){
        return $this->hasMany(municipality::class,'estates_id','id');
    }
    public function users(){
        return $this->hasOne(User::class,'estates_id','id');

    }
}