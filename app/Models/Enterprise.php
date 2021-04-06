<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = ['name','ruc','user_id'];


    public function getRouteKeyName()
    {
        return 'name';
    }

    //Relacion de uno a uno
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
       
    
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }


    //Relacion de uno a muchos
    public function employees(){
        return $this->hasMany('App\Models\Employee');
    }
    
}
