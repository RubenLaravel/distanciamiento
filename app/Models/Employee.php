<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre','apellido1','apellido2','sede','area','cargo','enterprise_id'];

    public function getRouteKeyName()
    {
        return 'nombre';
    }

    //Relacion de uno a uno
    public function device(){
        return $this->hasOne('App\Models\Device');
    }

    //Relacion de uno a muchos (Inversa)
    public function enterprise(){
        return $this->belongsTo('App\Models\Enterprise');
    }
}
