<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Providers\RouteServiceProvider;

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
            'turnNumber' => $request->folio,
            'catoperation_id' => $request->operation,
        ]);

        $operacion = DB::table('catoperations')
        ->select('description')
        ->where("id","=",$turn->catoperation_id)
        ->get();

        $operacion[0]->description = strtoupper($operacion[0]->description);
        return view('Cliente.ticket',compact('turn','operacion'));
   
    }

}
