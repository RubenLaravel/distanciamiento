<?php

namespace App\Http\Controllers;

use App\Models\Collision;
use App\Models\Device;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnterpriseController extends Controller
{
    public function index(){
                           
        return view('dashboard');
    }

    public function datos(){
        
        $id = Auth::user()->enterprise->id;

        $employees = Employee::where('enterprise_id',$id)->count();
        
        $sedes = Employee::where('enterprise_id',$id)->pluck('sede')->unique()->count();

        $areas = Employee::where('enterprise_id',$id)->pluck('area')->unique()->count();

        $collisions = Employee::where('enterprise_id',$id)->pluck('id');

        $collisions = Device::whereIn('employee_id',$collisions)->pluck('id');

        $collisions = Collision::whereIn('device_id',$collisions)->count();

        return view('enterprise.datos', compact('employees','sedes','areas','collisions'));
    }
    
    public function analitica(){
        
        return view('enterprise.analitica');
    }

    //temporal
    public function detalle(){

        $id = Auth::user()->enterprise->id;

        $employees = Employee::where('enterprise_id',$id)->get();

        return view('enterprise.detalle', compact('employees'));
    }
}
