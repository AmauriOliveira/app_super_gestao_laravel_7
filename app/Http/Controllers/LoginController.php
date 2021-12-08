<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        $erro = "";

        if ($req->get('erro') == 'fail') {
            $erro = 'Usuário ou Senha não existe.';
        }

        if ($req->get('erro') == 'notLogged') {
            $erro = 'Necessário realizar login para ter acesso a página.';
        }

        return view('site.login', ['erro' => $erro]);
    }
    public function autenticar(Request $req)
    {
        $regras = [
            "usuario" => "email",
            "senha" => "required"
        ];

        $feedback = [
            "usuario.email" => "O campo usuário é obrigatório.",
            "senha.required" => "o campo senha é obrigatório",
        ];

        $req->validate($regras, $feedback);

        $email = $req->get('usuario');
        $password = $req->get('senha');

        $user = new User();

        $loggedUser = $user
            ->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (isset($loggedUser->name)) {
            session_start();

            $_SESSION['nome'] = $loggedUser->name;
            $_SESSION['email'] = $loggedUser->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => "fail"]);
        }
    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.index');
    }
}
