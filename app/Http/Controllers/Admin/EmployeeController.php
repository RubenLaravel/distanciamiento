<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Enterprise;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(5);
        
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprises = Enterprise::all()->pluck('name','id');
        
        return view('admin.employees.create', compact('enterprises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'sede' => 'required',
            'area' => 'required',
            'cargo' => 'required',
            'enterprise_id' => 'required',
        ]);
        
        $employee = Employee::create($request->all());

        return redirect()->route('admin.employees.edit', compact('employee'))->with('info', 'El empleado se creó con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $enterprises = Enterprise::all()->pluck('name','id');
        
        return view('admin.employees.edit', compact('employee','enterprises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'sede' => 'required',
            'area' => 'required',
            'cargo' => 'required',
            'enterprise_id' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('admin.employees.edit', compact('employee'))->with('info', 'El empleado se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('admin.employees.index')->with('info', 'El empleado se eliminó con éxito');
    }
}
