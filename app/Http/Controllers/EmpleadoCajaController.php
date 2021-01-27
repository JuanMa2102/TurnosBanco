<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\catteller;
use App\Models\telleremploye;
use Carbon\Carbon;

class EmpleadoCajaController extends Controller
{
    public function abrirCaja($id)
    {
        $id_user = auth()->user()->id;
        $nameAdmin = auth()->user()->name;
        $date = Carbon::now();

        $empleado_caja = telleremploye::create([
            'catteller_id' => $id,
            'user_id' => $id_user,
            'enabled' => 1,
            'open' => $date
        ]);

        $folio = "Sin Atender";

        return view('Cajero.atender', compact('nameAdmin','folio'));
    }
}
