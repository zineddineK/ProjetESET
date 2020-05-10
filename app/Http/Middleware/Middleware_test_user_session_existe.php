<?php

namespace App\Http\Middleware;

use Closure;

class Middleware_test_user_session_existe
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
      if ($request->session()->exists('email_user')) {
        return redirect('/acceuil');
      }
        return $next($request);
    }
}
