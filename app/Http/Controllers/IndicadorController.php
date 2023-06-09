<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Coordinacion;
use App\Models\Indicadores;
use App\Models\User;
use App\Models\Inventario;

class IndicadorController extends Controller
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
        $inventarios = Inventario::select('inventarios.nombre', 'inventarios.valor_carga_inv', 'coordinacions.nombre_coordinacion')
    ->join('coordinacions', 'inventarios.coordinacion_id', '=', 'coordinacions.id')
    ->get();
        return view('indicadores')->with('inventarios',$inventarios);
    }
}