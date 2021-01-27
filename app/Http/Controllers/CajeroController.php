<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CajeroController extends Controller
{
    public function index()
    {
        $id_user = auth()->user()->id;
        $nameAdmin = auth()->user()->name;
        $date = Carbon::now();
        
        $request->validate([
            'caja' => 'required',
        ]);

        $empleado_caja = telleremploye::create([
            'catteller_id' => $request->caja,
            'user_id' => $id_user,
            'enabled' => 1,
            'open' => $date
        ]);
    }

    public function create()
    {
        return view('administrador.create');
        
    }
    public function mostrarCajero()
    {
        $id_user = auth()->user()->id;
        $nameAdmin = auth()->user()->name;

        $users = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();

        $cajero = DB::table('users')
        ->where('id', '=' ,$id_user)
        ->get();

        $tellers = DB::table('cattellers')
        ->get();
                
        if($cajero[0]->administrador == 1)
            return view('administrador.index', compact('users','nameAdmin','tellers'));
        else
            return view('Cajero.index', compact('nameAdmin','tellers'));
    }

    public function show($obj)
    {
        return view('administrador.show', compact('obj'));
    }
}
