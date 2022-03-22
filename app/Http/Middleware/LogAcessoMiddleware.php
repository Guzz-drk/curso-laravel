<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
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
        //return $next($request);
      
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log'=> "IP $ip Requisitou a ROTA $rota"]);

        //return $next($request);
        $resposta = $next($request);
        $resposta->setStatusCode(201, 'O status da resposta e o texto da resposta foram modificados');
        return $resposta;
    }
}
