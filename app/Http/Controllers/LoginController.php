<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
        if($request->get('erro')){
            $erro = 'Usuário e ou senha não existe';
        }

        if($request->get('erro')){
            $erro = 'Necessario realizar login pra ter acesso a pagina';
        }
        return view('site.login',['titulo' => 'login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        //regras de validação
        $rules = [
            'usuario' => 'email',
            'senha' => 'required'
        ];
        //mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuario (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se não passar pelo validate
        $request->validate($rules,$feedback);

        $email = $request->get('usuario');
        $senha = $request->get('senha');

        //iniciar o model User
        $user = new User();
        $usuario = $user->where('email',$email)->where('password', $senha)->first();

        if(isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else{
            return redirect()->route('site.login',['erro' => 1]);
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
