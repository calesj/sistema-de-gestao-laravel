<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
use Illuminate\Contracts\Support\Responsable;

class LogAccessoMiddleware
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
        //$request - manipular

        //return $next($request);

        //pegando o IP do browser que está vindo no request e armazenando na variavel $ip
        $ip = $request->server->get('REMOTE_ADDR');

        //pegando a URL que o browser do cliente que fez o pedido está tentando acessar
        $url = $request->getRequestUri();

        //salvando no banco o ip, e a url que o ip requisitou
        LogAcesso::create(['log' => "$ip xyz requisitou a rota $url"]);

        return $next($request);
        //o $next esta liberando o pedido para a proxima etapa
        //return $next($request);

        //return $next($request);
    }
}
