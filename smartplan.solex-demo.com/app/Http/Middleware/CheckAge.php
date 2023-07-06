<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if($request->name==='ahmed') {
            echo "elmiddleware 2afa4 ahmed";
            return redirect("/");
        }
        else echo "Check Age Middleware";
        return $next($request);
    }
}
