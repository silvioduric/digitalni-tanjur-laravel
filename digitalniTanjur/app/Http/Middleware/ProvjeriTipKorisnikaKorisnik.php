<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class ProvjeriTipKorisnikaKorisnik
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
        if (Auth::user()->hasAnyRole(['Administrator', 'Korisnik'])) {
            return $next($request);
        }

        return redirect('/home');
    }
}
