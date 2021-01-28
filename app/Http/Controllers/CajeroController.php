<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CajeroController extends Controller
{
    public function index()
    {
        // $cashier = tblcashierbankboxer::all();
        // return view('cashier.index');

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

        $cajas = DB::table('cattellers')
        ->get();
                
        if($cajero[0]->administrador == 1)
            return view('administrador.index', compact('users','nameAdmin'));
        else
            return view('Cajero.index', compact('nameAdmin','cajas'));
    }

    public function show($obj)
    {
        return view('administrador.show', compact('obj'));
    }
}
