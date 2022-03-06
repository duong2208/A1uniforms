<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Output\ConsoleOutput;


class ManualAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $out = new ConsoleOutput();
        $out->writeln(ManualAuth::class);

        if(!Session::has('ad_user')){ // neu Session chua co ad_user, ! la phu dinh
            $out->writeln('unauthenticated');
            return redirect()->route('auth.ask');
        }else{
            //co Session = da login
            $out->writeln('authenticated: ' .Session::get('ad_user'));
        }
        return $next($request);
    }
}
