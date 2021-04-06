<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::paginate(10);
        
        return view('admin.enterprises.index', compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->pluck('name','id');
        
        return view('admin.enterprises.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return Storage::put('imagenes', $request->file('imagen'));
        
        $request->validate([
            'name' => 'required',
            'ruc' => 'required|numeric|digits:11|unique:enterprises',
            'user_id' => 'required|unique:enterprises',
            'imagen' => 'image',
        ]);
        
        $enterprise = Enterprise::create($request->all());

        if ($request->file('imagen')) {
            $file = Storage::put('imagenes', $request->file('imagen'));
        
            $enterprise->update([$enterprise->imagen = $file]);
        }
        
        return redirect()->route('admin.enterprises.edit', $enterprise)->with('info','La compañia se creó con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        return view('admin.enterprises.edit', compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        $request->validate([
            'name' => 'required',
            'ruc' => "required|numeric|digits:11|unique:enterprises,ruc,$enterprise->id",
            'user_id' => "required|unique:enterprises,user_id,$enterprise->id",
            'imagen' => 'image',
        ]);

        $enterprise->update($request->all());

        if ($request->file('imagen')) {
            $file = Storage::put('imagenes', $request->file('imagen'));
        
            if($enterprise->imagen){
                
                Storage::delete($enterprise->imagen);
                $enterprise->update([$enterprise->imagen = $file]);
            
            }else{
                $enterprise->update([$enterprise->imagen = $file]);
            }
        }

        return redirect()->route('admin.enterprises.edit', $enterprise)->with('info','La compañia se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();

        return redirect()->route('admin.enterprises.index')->with('info','La compañia se eliminó con éxito');
    }
}
