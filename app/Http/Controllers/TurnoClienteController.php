<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Models\turn;

class TurnoClienteController extends Controller
{
    public function mostrarTurnos()
    {
       
        $date = Carbon::now()->format('Y-m-d');

        $cliente = DB::table('customers')
                ->where('created_at','>=', $date)
                ->where('attended','=',0)
                ->orderBy('created_at', 'asc')
                ->get();
        
                
        if(sizeof($cliente)>0)
        {        
            $caja = DB::table('telleremployes')
                    ->where('user_id','=',auth()->user()->id)
                    ->where('enabled', '=',1)
                    ->orderBy('created_at', 'desc')
                    ->get();
        
            $empleado_cliente = turn::create([
                        'telleremploye_id' => $caja[0]->id,
                        'customer_id' => $cliente[0]->id,
                    ]);
            
            DB::table('customers')
                    ->where('id', $cliente[0]->id)  // find your user by their email
                    ->update(array('attended' => 1));  // update the record in the DB.
        
                $folio = $cliente[0]->turnNumber;
        }
        else{
            $folio = "No hay mas clientes";
        }
        $nameAdmin = auth()->user()->name;
        
        
        return view('cajero.atender',compact('nameAdmin','folio'));

    }

}
