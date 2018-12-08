<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;

class DescuentosController extends Controller
{
    //
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $aitems = DB::table('descuentos')
                    ->join('empresa_afiliadas', 'descuentos.empresa_id', '=', 'empresa_afiliadas.id')
                    ->select('descuentos.porcentaje as porcentaje', 'empresa_afiliadas.rs as nombre')
                    ->get();
        $socio = User::find(Auth::id());
        return view('descuentos',['aitems'=>$aitems,'tipo'=>$socio->id_tipo_socio]);
    }
}
