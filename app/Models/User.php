<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'password',
        'email',
        'birthday',
        'sex',
        'location',
        'street',
        'outdoor_number',
        'indoor_number',
        'postal_code',
        'between_streets',
        'estates_id',
        'typeusers_id',
        'municipalities_id'

        ];

    public function estates(){
        return $this->belongsTo(estate::class,'estates_id')->withDefault([
            'estate'=> 'No existe ningun estado relacionado.'
        ]);
    }   

    public function typeusers(){
        return $this->belongsTo(typeuser::class,'typeusers_id')->withDefault([
            'type_user'=> 'No existe ningun tipo de usuario relacionado.'
        ]);
    }

    public function municipalities(){
        return $this->belongsTo(municipality::class,'municipalities_id')->withDefault([
            'municipality'=> 'No existe ningun municipio relacionado.'
        ]);
    }

    public function sales(){
        return $this->hasOne(sales::class,'users_id','id');
    }
}