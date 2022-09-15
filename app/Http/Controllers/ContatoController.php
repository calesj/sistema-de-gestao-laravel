<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
/*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        return view('site.contato', ['titulo' => 'Contato (teste)']);

        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
*/
            //$contato = new SiteContato();
            //$contato->create($request->all());

    //simulando conteudo do banco e enviando esse array para a view site.contato
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'required|email|unique:site_contatos',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O nome precisa de pelomenos 3 caracteres',
            'nome.max' => 'O nome não pode ter mais que 40 caracteres',
            'nome.unique' => 'O nome ja existe',

            'email.email' => 'O email informado não é válido',
            'mensagem.max' => 'A mensagem não pode passar de 2000 caracteres',
            'required' => 'o campo :attribute é obrigatório'
        ];
            //realizar a validação do formulario recebidos no request
        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
