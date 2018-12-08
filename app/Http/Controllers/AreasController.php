<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AreasController extends Controller
{
    //
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $aitems = DB::table('areas')->get();
        return view('areas',['aitems'=>$aitems]);
    }
}
