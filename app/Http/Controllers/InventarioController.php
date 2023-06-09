<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class InventarioController extends Controller
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
        $inventarios = Inventario::all();
        return view('inventario')->with('inventarios',$inventarios);
    }

    public function create()
    {
        
        return view('crudInventario.create');
    }

    public function store(Request $request)
    {
        
        $inventarios = new Inventario();
        $inventarios->nombre= $request->get('nombre');
        $inventarios->descripcion= $request->get('descripcion');
        $inventarios->user_id= 1;
        $inventarios->coordinacion_id= 2;
        $inventarios->save();

        return redirect('/inventario');
    }

    public function edit($id)
    {
        
        $inventario = Inventario::find($id);
        return view('crudInventario.edit')->with('inventario',$inventario);
    }

    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);

       
        $inventario->nombre= $request->get('nombre');
        $inventario->descripcion= $request->get('descripcion');
        $inventario->user_id= 1;
        $inventario->coordinacion_id=2;
        $inventario->save();

        return redirect('/inventario');
    }

    public function destroy($id)
    {
        $inventario = Inventario::find($id);
       
        $inventario->delete();

        return redirect('/inventario');
    }
}