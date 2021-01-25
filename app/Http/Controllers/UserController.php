<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();
                //return $users;

        return view('administrador.index', compact('users'));        
    }
    public function create()
    {
        $caj = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();
        //return $cashier;
        return view('administrador.create', compact('caj'));
    }    

    public function show($id)
    {
        $caj = User::find($id);
        //return $cashier;        
        return view('administrador.show', compact('caj'));
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();    
        $users = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();
            
                $admin = DB::table('users')
                ->where('administrador', '<>', false)
                ->get();
                $nameAdmin = $admin[0]->name;

        
        return view('administrador.index', compact('users','nameAdmin'));
        //return view('cashier.index', compact('users'));
    }
}
