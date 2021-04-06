<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Collision;
use App\Models\Device;
use App\Models\Employee;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use Illuminate\Support\Facades\Auth;

class IncidenciasTotalesChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $id = Auth::user()->enterprise->id;
        $id = Employee::where('enterprise_id',$id)->pluck('id');
        $id = Device::whereIn('employee_id',$id)->pluck('id');
        $id = Collision::whereIn('device_id',$id)->orderBy('fecha')->pluck('fecha')->countBy();

        $key = $id->keys()->toArray();
        $value = $id->values()->toArray();
        
        return Chartisan::build()
            ->labels($key)
            ->dataset('Incidencias', $value);
            // ->dataset('Sample 2', [3, 2, 1]);
    }
}