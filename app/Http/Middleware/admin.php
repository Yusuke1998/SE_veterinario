<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
{
    public function handle($request, Closure $next)
    {
    	if (Auth::check() && Auth::User()->is_admin == 1){
	    	return $next($request)->with('info','Tienes permisos de administrador! Bienvenido.');
    	}else{
            return redirect('/registro');
    	}
    }
}
