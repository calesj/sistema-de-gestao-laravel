<?php

namespace App\Http\Middleware;

use Closure;

class AutenticadorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        session_start();
        //Verifica se os campos não estão vazios
        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
            //se não estiver, ele libera o request para o proximo middleware
            //se não tiver proximo middleware, ele libera o request para o controller
            return $next($request);
        } else {
            return redirect()->route('site.login',['erro' => 2]);
        }
    }
}
