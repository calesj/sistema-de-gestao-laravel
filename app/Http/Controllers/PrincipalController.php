<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        //enviando o parametro $motivo_contatos para view
        $motivo_contatos = MotivoContato::all();
        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
