<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        /** enviando a array associativa como variavel e valor para o blade,
        o'titulo' é o nome da variavel setata na view
         * 'Contato(teste)' é o valor que você está atribuindo a essa variavel
         **/

        return view('site.principal',['titulo' => 'Principal']);
    }
}
