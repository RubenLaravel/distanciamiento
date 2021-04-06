<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Employee;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use Illuminate\Support\Facades\Auth;

class IncidenciasAreasChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $id = Auth::user()->enterprise->id;
        
        $areas = [];
        $incidencias = [];

        $empleados = Employee::where('enterprise_id',$id)->get();
        
        if ($empleados->count() >= 1) {
            
            foreach ($empleados as $empleado) {
                $areas[] = $empleado->area;
                $collisions[] = $empleado->device->collisions->count();
            }

            function array_combine_($keys, $values){
                $result = array();
            
                foreach ($keys as $i => $k) {
                 $result[$k][] = $values[$i];
                 }
            
                array_walk($result, function(&$v){
                 $v = (count($v) == 1) ? array_pop($v): $v;
                 });
            
                return $result;
            }

            $grupos = array_combine_($areas,$collisions);
 
            $areas = array_keys($grupos);
            $grupos = array_values($grupos);

            foreach($grupos as $grupo){
                
                if(is_Array($grupo)){ 
                    $incidencias[] = array_sum(array_values($grupo));
                
                }else{
                    $incidencias[] = $grupo;
                }
            }
            

        }else{
                $areas;
                $incidencias;
        }

        return Chartisan::build()
            ->labels($areas)
            ->dataset('Incidencias', $incidencias);
    }
}