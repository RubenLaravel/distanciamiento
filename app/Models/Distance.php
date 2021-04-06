<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    //use HasFactory;

    protected $table='distances';
    protected $primaryKey='id';
    protected $fillable=[
        'usuario1','usuario2','evento',
    ];

    public $timestamps = false;
}
