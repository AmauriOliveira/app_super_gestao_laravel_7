<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;

class LogAcessoMiddleware
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
        $remote_ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();

        LogAcesso::create(['log' => "IP: $remote_ip, Rota: $route ."]);
        return $next($request);
    }
}
