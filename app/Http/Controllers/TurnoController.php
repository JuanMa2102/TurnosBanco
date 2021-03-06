<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function getOperations()
    {
        
        $operations = DB::table('catoperations')
            ->select('description','id')
            ->get();

        $folio = DB::select('CALL getFolio');

        return view('Cliente.turno',compact('folio','operations'));
    }

    public function store(Request $request)
    {
        $turn = customer::create([
            'attended' => 0,
            'name' => $request->Nombre,
            'turnNumber' => $request->folio,
            'catoperation_id' => $request->operation,
        ]);
        return redirect()->route('ticket', ['id' => $turn->id ]);
    }

}
