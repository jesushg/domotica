<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RequireOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = redirect('login');
        $user = Auth::user();
        if($user != null){
            if($user->rol == "Administrador" || $user->rol == "Propietario"){
                $response = $next($request);
            } else {
                $response = "No estás autorizado";
            }
        }
        return $response;
    }
}
