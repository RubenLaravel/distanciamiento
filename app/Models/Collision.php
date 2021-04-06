<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collision extends Model
{
    use HasFactory;

    protected $table='collisions';
    protected $primaryKey='id';
    protected $fillable=[
        'fecha','hora','device_id','device2_id'
    ];
    
    public $timestamps = false;

    //Relación de uno a muchos (Inversa)
    public function device(){
        return $this->belongsTo('App\Models\Device');
    }
}
