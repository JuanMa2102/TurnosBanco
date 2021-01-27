<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\customer;
use App\Models\turns;
use Illuminate\Support\Facades\DB;

class PantallaController extends Controller
{
    public function verTurnos()
    {
        $date = Carbon::now()->format('Y-m-d');

        $turnos = DB::table('customers')
                ->where('created_at','>=', $date)
                ->where('attended','=',0)
                ->orderBy('created_at', 'asc')
                ->get();
        
        $atendidos = DB::table('turns')
                ->join('customers', 'turns.customer_id', '=', 'customers.id')
                ->join('telleremployes', 'turns.telleremploye_id', '=', 'telleremployes.id')
                ->join('cattellers','telleremployes.catteller_id', '=', 'cattellers.id')
                ->join('catoperations','customers.catoperation_id', '=', 'catoperations.id')
                ->select('customers.turnNumber','customers.name','cattellers.numberTeller','catoperations.description')
                ->orderBy('turns.created_at','desc')
                ->get();


        dd($turnos);

        return view('Cliente.ticket',compact('turn','operacion'));
    }
}
