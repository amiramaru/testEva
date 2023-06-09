<?php

namespace App\Http\Controllers;

use App\Models\Coordinacion;
use Illuminate\Http\Request;
use App\Models\Cooordinacion;

class CoordinacionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coordinaciones = Coordinacion::all();
        return view('coordinacion')->with('coordinaciones',$coordinaciones);
    }

    public function create()
    {
        
        return view('crudCoordinacion.create');
    }

    public function store(Request $request)
    {
        
        $coordinaciones = new Coordinacion();
        $coordinaciones->nombre_coordinacion= $request->get('nombre');
        $coordinaciones->save();

        return redirect('/coordinacion');
    }

    public function edit($id)
    {
        
        $coordinacion = Coordinacion::find($id);
        return view('crudCoordinacion.edit')->with('coordinacion',$coordinacion);
    }

    public function update(Request $request, $id)
    {
        $coordinacion = Coordinacion::find($id);

       
        $coordinacion->nombre_coordinacion= $request->get('nombre');
        $coordinacion->save();

        return redirect('/coordinacion');
    }

    public function destroy($id)
    {
        $inventario = Coordinacion::find($id);
       
        $inventario->delete();

        return redirect('/coordinacion');
    }
}