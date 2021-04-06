<?php

declare(strict_types = 1);

namespace App\Charts;

use Illuminate\Support\Str;
use App\Models\Employee;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use Illuminate\Support\Facades\Auth;


class IncidenciasPersonasChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $id = Auth::user()->enterprise->id;
        $personas = [];
        $incidencias = [];

        $empleados = Employee::where('enterprise_id',$id)->get();

        if ($empleados != null) {

            // Búsqueda de empleados
            foreach ($empleados as $empleado) {
                
                $personas[] = $empleado->nombre . ' ' . Str::substr($empleado->apellido1,0,1) . '.';
            };

            // Búsqueda de incidencias por empleado
            foreach ($empleados as $empleado) {
                
                $incidencias[] = $empleado->device->collisions->count();
            };     
       
        }else{
                $personas;
                $incidencias;
        }

        return Chartisan::build()
            ->labels($personas)
            ->dataset('Incidencias', $incidencias);
    }
}