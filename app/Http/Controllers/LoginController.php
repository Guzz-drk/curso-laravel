<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuário e ou senha não existe';
        }

        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para ter acesso';
        }


        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }
    public function autenticar(Request $request){
        //regras de validação
        $regras=[
            'usuario'=>'email',
            'senha'=> 'required'
        ];

        //mensagem de feedback de validação
        $feedback = [
            'usuario.email'=>'O campo usuario(e-mail) é obrigatório',
            'senha.required'=> 'O campo senha é obrigatório'
        ];
        //se não passar pelo validate
        $request->validate($regras, $feedback);

        //recuperar parametros do form
        $email = $request->get('usuario');
        $password= $request->get('senha');
        echo "Usuario: $email | Senha: $password"; 
        echo '<br>';

        //iniciar o model user
        $user = new User();


        $usuario = $user->where('email', $email)
        ->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else{
            return redirect()->route('site.login', ['erro' => 1]);        
        }
    }
    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
