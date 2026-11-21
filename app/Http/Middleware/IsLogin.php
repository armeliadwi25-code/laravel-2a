<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        //cek apakah ada session logged_in
        if (!session('logged_in')) {
            //jika tidak ada, kembali ke halaman login
            return redirect('/');
        }

        return $next($request);
    }
}