<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\reserva_servicio;
use DateTime;

class ReservaController extends Controller
{
    //
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $items = DB::table('servicios')->get();
        $aitems = DB::table('areas')->get();
        return view('reserva',['message'=>'','items'=>$items,'aitems'=>$aitems]);
    }
    public function save(Request $request){
        $idUsuario = Auth::id();
        $idServicio = $request->input('inp-idservicio');
        $idArea = $request->input('inp-idarea');
        $horaInicio = date("Y-m-d H:i:s");
        $horaFin = new DateTime($horaInicio);
        $horaFin = date_modify($horaFin, "+1 hour");
        $items = DB::table('servicios')->get();
        $aitems = DB::table('areas')->get();

        $horaInicioCount = reserva_servicio::where('fecha_inicio','>=',$horaInicio)
                                ->where('fecha_fin','<=',$horaInicio)
                                ->where('servicio_id',$idServicio)->count();
                                
        $horaFinCount = reserva_servicio::where('fecha_inicio','>=',$horaFin)
                        ->where('fecha_fin','<=',$horaFin)
                        ->where('servicio_id',$idServicio)->count();

        if($horaInicioCount==0&&$horaFinCount==0){
            $reservaServicio = new reserva_servicio;
            $reservaServicio->fecha_inicio = $horaInicio;
            $reservaServicio->fecha_fin = $horaFin;
            $reservaServicio->user_id = $idUsuario;
            $reservaServicio->servicio_id = $idServicio;
            $reservaServicio->area_id = $idArea;
            $reservaServicio->save();
            return view('reserva',['message'=>'Reserva Creada','items'=>$items,'aitems'=>$aitems]);
        }
        return view('reserva',['message'=>'No hay la cantidad que solicita','items'=>$items,'aitems'=>$aitems]);
    }
}