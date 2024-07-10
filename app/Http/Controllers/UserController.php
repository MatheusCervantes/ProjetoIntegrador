<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Mail\Usuario;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    protected $userController;
    protected $senhaAleatoria;

    public function store($nomeuser, $email, $type)
    {
        //Criando usuário
        $user = new User();
        $user->username = $nomeuser;
        $user->email = $email;
        $user->password = hash('sha512', $this->senhaAleatoria = Str::random(12)); // Gerar senha aleatória gerada
        $user->type = $type;
        $user->save();

        return $user;
    }

    public function sendemail($nome, $nomeuser, $email) {
        $username = $nomeuser;
        $password = $this->senhaAleatoria;

        Mail::to($email, $nome)->send(new Usuario([
            'fromName' => 'Clinica',
            'fromEmail' => 'from@example.com',
            'subject' => 'Login',
            'username' => $username,
            'password' => $password,
            'nome' => $nome
        ]));
    }
}
