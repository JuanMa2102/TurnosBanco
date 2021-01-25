<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logeado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {        
        $users = DB::table('sessions')                
                ->get();
                $isLog = $users[0]->user_id;
                if ($isLog == null) 
                {
                    return redirect('/');
                } 
                else 
                {
                    return $next($request);                    
                }                
    }
}
