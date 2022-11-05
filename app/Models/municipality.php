<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'municipality',
        'estates_id'
        ];
    public function estates(){
        return $this->belongsTo(estate::class,'id');
    }
}