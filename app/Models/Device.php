<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['mac','employee_id'];

    //Relación de uno a uno inversa
    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }

    //Relación de uno a muchos
    public function collisions(){
        return $this->hasMany('App\Models\Collision');
    }
}
