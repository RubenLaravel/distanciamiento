<?php

namespace App\Http\Controllers;


use App\Models\Collision;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CollisionController extends Controller
{
    public function verificar(Request $request)
    {
        $mac1   = $request->input('mac1'); 
        $mac2   = $request->input('mac2');
        
        $usuario1 = Device::where('mac',$mac1)->pluck('employee_id')->first();
        $usuario2 = Device::where('mac',$mac2)->pluck('employee_id')->first();

        $consulta = Collision::where(['device_id'=>$usuario1,'device2_id'=>$usuario2])->get(['fecha','hora'])->last();

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        $tiempo = $date->format('H:i:s');

        $hora = Carbon::now()->subSeconds(60);
        $hora = $hora->format('H:i:s');

        
        if($consulta == NULL || $consulta->fecha <> $fecha){

            $distance = new Collision();
            $distance->fecha = $fecha;
            $distance->hora = $tiempo;
            $distance->device_id = $usuario1;
            $distance->device2_id = $usuario2;          
            
            $distance->save();

            return json_encode(array(
    
                'status' => 100,
                'response' => array(
                    'mensaje' => "Registro completo, días diferentes"
                )
                ));
            
        }elseif($consulta->fecha == $fecha && $consulta->hora < $hora){

            $distance = new Collision();
            $distance->fecha = $fecha;
            $distance->hora = $tiempo;
            $distance->device_id = $usuario1;
            $distance->device2_id = $usuario2;
            
            $distance->save();

            return json_encode(array(
    
                'status' => 300,
                'response' => array(
                    'mensaje' => "Registro completo, mismo día"
                )
                ));
           
        }else{
            
            return json_encode(array(
    
                'response' => array(
                    'mensaje' => "Registro no realizado"
                )
                ));

        }

    }
}
