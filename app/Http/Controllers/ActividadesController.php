<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActividadesController extends Controller
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
        $actividades = DB::table('cao_usuario')
        ->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
        ->where('permissao_sistema.co_sistema', 1)
        ->where('permissao_sistema.in_ativo', "S")
        ->get();
        //$actividades = DB::table('cao_usuario')->get();//Actividad::all();
        return view('actividades')->with('actividades',$actividades);
    }

    public function create()
    {
        
        return view('crudActividades.create');
    }

    public function store(Request $request)
    {
        
        $actividades = new Actividad();
        $actividades->nombre= $request->get('nombre');
        $actividades->descripcion= $request->get('descripcion');
        $actividades->status= 'activa';
        $actividades->user_id= 1;
        $actividades->coordinacion_id= 2;
        $actividades->save();

        return redirect('/actividades');
    }

    public function edit($id)
    {
        $actividades = DB::table('cao_fatura')->select('cao_fatura.co_cliente','cao_fatura.co_fatura', 'cao_fatura.co_os', 'cao_obs_cliente.co_usuario')
        ->join('cao_obs_cliente', 'cao_fatura.co_cliente', '=', 'cao_obs_cliente.co_cliente')
        ->distinct()->get();//->dd();

        $salario =  DB::table('cao_salario')->select('brut_salario')->where('co_usuario','carlos.arruda')->get();//->dd();
        
        //$actividad = Actividad::find($id);
        return view('crudActividades.edit')->with('actividades', $actividades)->with('salario', $salario); 
    }

    public function update(Request $request, $id)
    {
        $actividad = Actividad::find($id);

       
        $actividad->nombre= $request->get('nombre');
        $actividad->descripcion= $request->get('descripcion');
        $actividad->save();

        return redirect('/actividades');
    }

    public function destroy($id)
    {
        $inventario = Actividad::find($id);
       
        $inventario->delete();

        return redirect('/actividades');
    }
}