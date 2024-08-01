<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\recepcionista\Recepcionista;
use App\Http\Controllers\UserController;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class RecepcionistaController extends Controller
{
    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    public function store(Request $request)
    {
        try {
            // Validação dos dados de entrada
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'sexo' => 'required|in:Masculino,Feminino',
                'cpf' => 'required|unique:recepcionistas,cpf',
                'rg' => 'required|unique:recepcionistas,rg',
                'data_nasc' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|unique:recepcionistas,email',
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
            $nomeuser = strtolower($partesNome[0]) . "." . strtolower(end($partesNome)) . random_int(0, 99999);

            // Criar o usuário
            $user = $this->userController->store($nomeuser, 'recepcionista');

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
            return redirect('/painel-adm/gestao-recepcionista')->with('success', 'Recepcionista cadastrado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect()->back()->with('error', 'Já existe um recepcionista com este CPF, RG ou email. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao inserir o recepcionista. Por favor, tente novamente.');
        }
    }

    public function show($id)
    {
        $recepcionista = Recepcionista::findOrFail($id);
        return response()->json($recepcionista);
    }

    public function update_recepcionista(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'nome_completo' => 'required|string|max:255',
                'sexo' => 'required|in:Masculino,Feminino',
                'cpf' => 'required|unique:recepcionistas,cpf,' . $id,
                'rg' => 'required|unique:recepcionistas,rg,' . $id,
                'data_nascimento' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|email|unique:recepcionistas,email,' . $id,
                'telefone' => 'required|string|max:20',
                'rua' => 'required|string|max:255',
                'numero' => 'required|integer|min:1',
                'cidade' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'cep' => 'required|string|max:10',
            ]);
            Recepcionista::findOrFail($id)->update($data);

            return redirect('/painel-adm/gestao-recepcionista')->with('success', 'Recepcionista atualizado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect()->back()->with('error', 'Já existe um recepcionista com este CPF, RG ou email. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao atualizar o recepcionista. Por favor, tente novamente.');
        }
    }

    public function delete_recepcionista($id)
    {
        Recepcionista::findOrFail($id)->delete();
        return redirect('/painel-adm/gestao-recepcionista')->with('success', 'Recepcionista deletado com sucesso!');
    }

    public function search(Request $request)
    {
        try {
            $search = $request->input('search');
            if (!empty($search)) {
                $recepcionistas = Recepcionista::where('nome_completo', 'like', '%' . $search . '%')->get();
            } else {
                $recepcionistas = Recepcionista::all();
            }

            return view('gestao-recepcionista', ['recepcionistas' => $recepcionistas]);
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Nenhum recepcionista encontrado.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Erro na consulta ao banco de dados.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro inesperado.');
        }
    }

    public function perfil_recepcionista()
    {
        $usuario = Auth::user();
        return view('meu-perfil', ['usuario' => $usuario]);
    }

    public function obterPerfil()
    {
        $usuario = Auth::user();
        $recepcionista = Recepcionista::where('user_id', $usuario->id)->first();

        // Divida o nome completo para criar o nome e sobrenome
        $partesNome = explode(" ", $recepcionista->nome_completo);
        $nomeSobrenome = $partesNome[0] . " " . end($partesNome);
        // Adiciona o nome de usuário ao array de resposta
        $resposta = [
            'recepcionista' => $recepcionista,
            'nomeSobrenome' => $nomeSobrenome,
            'foto' => $recepcionista->foto ? asset('img/perfil/' . $recepcionista->foto) : 'https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png'
        ];
        return response()->json($resposta);
    }

    public function salvarPerfil(Request $request)
    {
        $usuario = Auth::user();
        $recepcionista = Recepcionista::where('user_id', $usuario->id)->first();

        // Atualiza os dados do médico
        $recepcionista->nome_completo = $request->input('nome');
        $recepcionista->sexo = $request->input('sexo');
        $recepcionista->cpf = $request->input('cpf');
        $recepcionista->rg = $request->input('rg');
        $recepcionista->data_nascimento = $request->data_nasc;
        $recepcionista->email = $request->input('email');
        $recepcionista->telefone = $request->input('tel');
        $recepcionista->rua = $request->input('rua');
        $recepcionista->numero = $request->input('num');
        $recepcionista->complemento = $request->input('complemento');
        $recepcionista->cidade = $request->input('cidade');
        $recepcionista->estado = $request->input('estado');
        $recepcionista->cep = $request->input('cep');

        // Atualiza a foto, se houver
        if ($request->hasFile('foto')) {
            // Remove a imagem antiga, se existir
            if ($recepcionista->foto) {
                $path = public_path('img/perfil/' . $recepcionista->foto);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/perfil'), $filename);

            $recepcionista->foto = $filename;
        }

        $recepcionista->save();

        return redirect('/painel-recepcionista/meu-perfil');
    }
}
