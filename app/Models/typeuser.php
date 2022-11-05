<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'type_user',
        
        ];
    public function users(){
        return $this->belongsTo(User::class,'id');
    }
}
