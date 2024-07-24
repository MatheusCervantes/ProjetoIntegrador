<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medico\Medicos;
use App\Http\Controllers\UserController;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class MedicoController extends Controller
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
                'cpf' => 'required|unique:medicos,cpf',
                'rg' => 'required|unique:medicos,rg',
                'data_nasc' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|email|unique:medicos,email',
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
            $user = $this->userController->store($nomeuser, 'medico');

            // Criar o medico associada ao usuário criado
            $medicos = new Medicos();
            $medicos->user_id = $user->id;
            $medicos->nome_completo = $validatedData['nome'];
            $medicos->sexo = $validatedData['sexo'];
            $medicos->cpf = $validatedData['cpf'];
            $medicos->rg = $validatedData['rg'];
            $medicos->data_nascimento = $validatedData['data_nasc'];
            $medicos->email = $validatedData['email'];
            $medicos->telefone = $validatedData['tel'];
            $medicos->rua = $validatedData['rua'];
            $medicos->numero = $validatedData['num'];
            $medicos->complemento = $request->complemento;
            $medicos->cidade = $validatedData['cidade'];
            $medicos->estado = $validatedData['estado'];
            $medicos->cep = $validatedData['cep'];
            $medicos->save();

            $this->userController->sendemail($validatedData['nome'], $nomeuser, $validatedData['email']);
            return redirect('/painel-adm/gestao-medico')->with('success', 'Médico cadastrado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            return redirect()->back()->with('error', $e->validator->errors());
            //return redirect()->back()->with('error', 'Já existe um médico com este CPF, RG ou email. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao inserir o médico. Por favor, tente novamente mais tarde.');
        }
    }

    public function show($id)
    {
        $medicos = Medicos::findOrFail($id);
        return response()->json($medicos);
    }

    public function update_medico(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'nome_completo' => 'required|string|max:255',
                'sexo' => 'required|in:Masculino,Feminino',
                'cpf' => 'required|unique:medicos,cpf,' . $id,
                'rg' => 'required|unique:medicos,rg,' . $id,
                'data_nascimento' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|email|unique:medicos,email,' . $id,
                'telefone' => 'required|string|max:20',
                'rua' => 'required|string|max:255',
                'numero' => 'required|integer|min:1',
                'cidade' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'cep' => 'required|string|max:10',
            ]);
            Medicos::findOrFail($id)->update($data);
            return redirect('/painel-adm/gestao-medico')->with('success', 'Médico atualizado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            return redirect()->back()->with('error', $e->validator->errors());
            //return redirect()->back()->with('error', 'Já existe um médico com este CPF, RG ou email. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao atualizar o médico. Por favor, tente novamente mais tarde.');
        }
    }

    public function delete_medico($id)
    {
        Medicos::findOrFail($id)->delete();
        return redirect('/painel-adm/gestao-medico')->with('success', 'Cadastro deletado com sucesso!');
    }

    public function search(Request $request)
    {
        try {
            $search = $request->input('search');
            if (!empty($search)) {
                $medicos = Medicos::where('nome_completo', 'like', '%' . $search . '%')->get();
            } else {
                $medicos = Medicos::all();
            }

            return view('gestao-medico', ['medicos' => $medicos]);
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Nenhum médico encontrado.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Erro na consulta ao banco de dados.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro inesperado.');
        }
    }
}
