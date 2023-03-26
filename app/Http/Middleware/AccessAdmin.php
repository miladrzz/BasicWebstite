<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AccessAdmin
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
      if(Auth::user()->hasAnyRole('admin')){
                return $next($request);
      }
      return redirect(to: 'home');
    }
}
