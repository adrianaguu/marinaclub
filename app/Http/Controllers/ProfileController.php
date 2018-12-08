<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = DB::table('users')
            ->Join('tipo_socio', 'tipo_socio.id', '=', 'users.id')
            //->get();
            ->where('users.id', Auth::id())
            ->first();
        return view('profile',['usuario'=>$user]);
    }
    public function edit(Request $request){
        $email = $request->input('inp-email');
        $name = $request->input('inp-name');
        $user = \App\User::find(Auth::id());
        $user->email = $email;
        $user->name = $name;
        $user->save();
        return view('profile',['usuario'=>$user]);
    }
}
