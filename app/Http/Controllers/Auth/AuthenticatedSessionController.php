<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        
        $request->authenticate();

        //$caj = $request;
        // $users = DB::table('users')
        //         ->where('isAdmin', '<>', true)
        //         ->get();
                //return $users;

        return redirect()->route('fakeLogin');
        //return view('cashier.index', compact('users'));

        // $turn = customer::create([
        //     'turnNumber' => $request->folio,
        //     'catoperation_id' => $request->operation,
        // ]);

        // return redirect()->route('ticket', ['id' => $turn->id ]);
    
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        if(auth()->user()->id != null)
        {
            if(!auth()->user()->administrador)
            {
                DB::table('telleremployes')
                ->where('user_id', auth()->user()->id)  // find your user by their email
                ->update(array('enabled' => 0));  // update the record in the DB. 
            }
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

        
    }
}
