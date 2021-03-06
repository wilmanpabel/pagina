<?php

namespace App\Http\Middleware;

use Closure;

class VerificarRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        $roles=array_slice(func_get_args(),2);
        //foreach($roles as $rol){
            if(auth()->user()->hasRoles($roles)){
                return $next($request);
            }
        //}
        return back();
    }
}
