<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Distance;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    public function index()
    {
        /*$registros = Distance::where(['usuario1'=>'Ruben','usuario2'=>'Amoretti'])->get(['fecha','tiempo'])->last();

        $fecha=Carbon::yesterday();
        $fecha=$fecha->format('Y-m-d');*/

        $hora=Carbon::now()->subSecond(60);
        $hora=$hora->format('H:i:s');

        /*if($registros->fecha <> $fecha && $registros->tiempo > $hora){
            $prueba="Se logro";
        }*/

        return view('index' , compact('hora'));
        
     
    }
    
    
    
    public function store(Request $request)
    {
        $distance= new Distance();
        $distance->usuario1=$request->input('usuario1');
        $distance->usuario2=$request->input('usuario2');
        $distance->evento=$request->input('evento');
        //$distance->fecha=$request->input('date');
        //$distance->tiempo=$request->input('time');
        
        $distance->save();

        return json_encode(array(

            'status' => 200,
            'response' => array(
                'mensaje' => "Registro realizado"
            )
            ));
    }
}
