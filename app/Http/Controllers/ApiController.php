<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Coordinacion;
use App\Models\Indicadores;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Inventario;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
   public function users(Request $request){
    $users = User::all();
    return response()->json($users);

   }

   public function inventarios(Request $request){
    //$inventarios = Inventario::all();
    $inventarios = Inventario::select('inventarios.nombre', 'inventarios.valor_carga_inv','inventarios.descripcion','inventarios.created_at','inventarios.updated_at', 'coordinacions.nombre_coordinacion')
    ->join('coordinacions', 'inventarios.coordinacion_id', '=', 'coordinacions.id')
    ->get();

    return response()->json($inventarios);

   }

   public function indicadores(Request $request){
    $indicadores = DB::table('cao_os')->select('co_usuario',DB::raw("SUM(co_os) as valor"))
    ->groupBy('co_usuario')
    ->get();//->dd();
    return response()->json($indicadores);

   }

   public function coordinaciones(Request $request){
      $coordinaciones = Coordinacion::all();
      return response()->json($coordinaciones);
  
     }

     public function actividades(Request $request){
      $actividades = $actividades = DB::table('cao_salario')
    ->get();
      return response()->json($actividades);
  
     }


}