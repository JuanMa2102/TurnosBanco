<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function mostrarTicket($id)
    {
        $turn = DB::table('customers')
            ->select('turnNumber','created_at','catoperation_id')
            ->where("id","=",$id)
            ->get();
        $operacion = DB::table('catoperations')
        ->select('description')
        ->where("id","=",$turn[0]->catoperation_id)
        ->get();

        $operacion[0]->description = strtoupper($operacion[0]->description);


        return view('Cliente.ticket',compact('turn','operacion'));
    }
}
