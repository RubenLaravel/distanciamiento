<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Employee;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::paginate(5);
        
        return view('admin.devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all()->pluck('nombre','id');
        
        return view('admin.devices.create', compact('employees'));
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
            'mac' => 'required|unique:devices',
            'employee_id' => 'required|unique:devices',
        ]);

        $device = Device::create($request->all());

        return redirect()->route('admin.devices.edit',compact('device'))->with('info', 'El dispositivo se creó con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $employees = Employee::all()->pluck('nombre','id');
        
        return view('admin.devices.edit', compact('device', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $request->validate([
            'mac' => "required|unique:devices,employee_id,$device->id",
            'employee_id' => "required|unique:devices,employee_id,$device->id",
        ]);

        $device->update($request->all());

        return redirect()->route('admin.devices.edit', compact('device'))->with('info', 'El dispositivo se actualicó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();

        return redirect()->route('admin.devices.index')->with('info', 'El dispositivo se eliminó con éxito');
    }
}
