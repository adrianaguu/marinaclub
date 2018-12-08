<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\reserva_equipamiento;
use App\equipamiento;
use App\stock;

class ReservaEqpController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $items = DB::table('equipamientos')->get();
        return view('reserva_eqp',['items'=>$items,'message'=>'']);
    }

    public function save(Request $request){
        $idUsuario = Auth::id();
        $idEquipamento = $request->input('sel_equip');
        $returnDate = $request->input('inp-date-return');
        $cantidad = $request->input('inp-cantidad');
        $item = equipamiento::join('stocks','equipamientos.id','=','stocks.id_equipamiento')->where('equipamientos.id',$idEquipamento)->first();
        $items = DB::table('equipamientos')->get();

        if($item->cantidad>=$cantidad){
            $reservaEquipamento = new reserva_equipamiento;
            $reservaEquipamento->fecha_inicio = date('Y-m-d');
            $reservaEquipamento->fecha_fin = $returnDate;
            $reservaEquipamento->user_id = $idUsuario;
            $reservaEquipamento->equipamiento_id = $idEquipamento;
            $reservaEquipamento->save();
            $stock = stock::where('id_equipamiento',$idEquipamento)->first();
            $newStock = stock::find($stock->id);
            $newStock->cantidad -= $cantidad;
            $newStock->save(); 
            return view('reserva_eqp',['message'=>'Reserva Creada','items'=>$items]);
        }
        return view('reserva_eqp',['message'=>'No hay la cantidad que solicita','items'=>$items]);
        
        
    }
}
