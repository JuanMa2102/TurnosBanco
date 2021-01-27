<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\catteller;
use App\Models\telleremploye;
use Carbon\Carbon;

class CajaController extends Controller
{
    public function create()
    {
        return view('Caja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'caja' => 'required|string|max:255',
        ]);
       
        $user = catteller::create([
            'numberTeller' => $request->caja,
        ]);

        $admin = DB::table('users')
                ->where('administrador', '<>', false)
                ->get();

        $nameAdmin = $admin[0]->name;

        $tellers = DB::table('cattellers')
        ->get();

        $users = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();

        return view('administrador.index', compact('users','nameAdmin','tellers'));
    }

    public function destroy($id)
    {
        DB::table('cattellers')->where('id', '=', $id)->delete(); 

        $users = DB::table('users')
                ->where('administrador', '<>', true)
                ->get();
            
        $admin = DB::table('users')
                ->where('administrador', '<>', false)
                ->get();

        $nameAdmin = $admin[0]->name;

        $tellers = DB::table('cattellers')
        ->get();
    
        return view('administrador.index', compact('users','nameAdmin','tellers'));
    }

    public function empleado_caja(Request $request){
        
        $request->validate([
            'caja' => 'required',
        ]);
        
        return redirect()->route('atender_caja', ['id' => $request->caja ]);
    }
}
