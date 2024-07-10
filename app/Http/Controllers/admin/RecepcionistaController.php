<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recepcionista;
use App\Http\Controllers\UserController;

class RecepcionistaController extends Controller
{
    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sexo' => 'required|in:masculino,feminino',
            'cpf' => 'required|unique:recepcionistas,cpf',
            'rg' => 'required|unique:recepcionistas,rg',
            'data_nasc' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
            'email' => 'required|email|unique:users,email|unique:recepcionistas,email',
            'tel' => 'required|string|max:20',
            'rua' => 'required|string|max:255',
            'num' => 'required|integer|min:1',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
        ]);

        // Criando nome de usuário
        $nome = $validatedData['nome'];
        $partesNome = explode(" ", $nome);
        $nomeuser = strtolower($partesNome[0]) . "." . strtolower(end($partesNome)) . random_int(0, 99);

        // Criar o usuário
        $user = $this->userController->store($nomeuser, $validatedData['email'], 'recepcionista');

        // Criar a recepcionista associada ao usuário criado
        $recepcionista = new Recepcionista();
        $recepcionista->user_id = $user->id;
        $recepcionista->nome_completo = $validatedData['nome'];
        $recepcionista->sexo = $validatedData['sexo'];
        $recepcionista->cpf = $validatedData['cpf'];
        $recepcionista->rg = $validatedData['rg'];
        $recepcionista->data_nascimento = $validatedData['data_nasc'];
        $recepcionista->email = $validatedData['email'];
        $recepcionista->telefone = $validatedData['tel'];
        $recepcionista->rua = $validatedData['rua'];
        $recepcionista->numero = $validatedData['num'];
        $recepcionista->complemento = $request->complemento;
        $recepcionista->cidade = $validatedData['cidade'];
        $recepcionista->estado = $validatedData['estado'];
        $recepcionista->cep = $validatedData['cep'];
        $recepcionista->save();

        $this->userController->sendemail($validatedData['nome'], $nomeuser, $validatedData['email']);
        return redirect('/painel-adm/gestao-recepcionista')->with('msg', 'Recepcionista criado com sucesso!');
    }
}
