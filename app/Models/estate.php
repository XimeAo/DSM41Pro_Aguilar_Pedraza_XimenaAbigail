<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'state',
        ];
    public function municipalities(){
        return $this->hasMany(municipality::class,'id');
    }
    public function users(){
        return $this->belongsTo(User::class,'id');

    }
}