<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class ProvjeriTipKorisnikaModerator
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
        if (Auth::user()->hasAnyRole(['Administrator', 'Moderator'])) {
            return $next($request);
        }

        return redirect('/home');
    }
}
