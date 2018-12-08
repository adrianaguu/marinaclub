<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListaReservasController extends Controller
{
    //
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $sitems = DB::table('reserva_servicios')
                    ->join('servicios','reserva_servicios.servicio_id','=','servicios.id')
                    ->join('areas','reserva_servicios.area_id','=','areas.id')
                    ->select('areas.nombre as areaNombre','servicios.nombre as servicioNombre')
                    ->get();
        $eitems = DB::table('reserva_equipamientos')
                    ->join('equipamientos','reserva_equipamientos.equipamiento_id','=','equipamientos.id')
                    ->select('equipamientos.nombre as eqpNombre')
                    ->get();
        return view('listareservas',['eitems'=>$eitems],['sitems'=>$sitems]);
    }
}