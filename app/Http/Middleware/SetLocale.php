<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // dd(session());
         if(session()->has('locale') && array_key_exists(session('locale'),config('localization.locales'))){
            // if(isset($_SESSION['locale'])){

            // dd(session()->get('locale'));
             app()->setLocale(session('locale'));
             dd(session());

         }
        return $next($request);
    }
}
