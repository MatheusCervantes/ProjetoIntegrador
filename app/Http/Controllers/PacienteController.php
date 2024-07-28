<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paciente\Plano_saude;
use App\Models\paciente\Pacientes;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class PacienteController extends Controller
{

    public function store(Request $request)
    {
        try {
            // Validação dos dados de entrada
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'sexo' => 'required|in:Masculino,Feminino',
                'cpf' => 'required|unique:pacientes,cpf',
                'rg' => 'required|unique:pacientes,rg',
                'data_nasc' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|email|unique:pacientes,email',
                'tel' => 'required|string|max:20',
                'rua' => 'required|string|max:255',
                'num' => 'required|integer|min:1',
                'cidade' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'cep' => 'required|string|max:10',
            ]);

            // Criar a pacientes associada
            $pacientes = new Pacientes();
            $pacientes->nome_completo = $validatedData['nome'];
            $pacientes->sexo = $validatedData['sexo'];
            $pacientes->cpf = $validatedData['cpf'];
            $pacientes->rg = $validatedData['rg'];
            $pacientes->data_nascimento = $validatedData['data_nasc'];
            $pacientes->email = $validatedData['email'];
            $pacientes->telefone = $validatedData['tel'];
            $pacientes->rua = $validatedData['rua'];
            $pacientes->numero = $validatedData['num'];
            $pacientes->complemento = $request->complemento;
            $pacientes->cidade = $validatedData['cidade'];
            $pacientes->estado = $validatedData['estado'];
            $pacientes->cep = $validatedData['cep'];

            if ($request->plano_saude == 'sim') {
                $pacientes->plano = true;
                $pacientes->save();

                //Adicionando plano de saúde
                $plano = new Plano_saude();
                $plano->paciente_id = $pacientes->id;
                $plano->nome_plano = $request->nome_plano;
                $plano->nro_plano = $request->numero_cartao;
                $plano->save();
            } else {
                $pacientes->plano = false;
                $pacientes->save();
            }
            return redirect('/painel-adm/gestao-paciente')->with('success', 'Paciente cadastrado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect()->back()->with('error', 'Já existe um paciente com este CPF, RG, email ou número do cartão do plano de saúde. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao inserir o paciente. Por favor, tente novamente.');
        }
    }

    public function show($id)
    {
        $paciente = Pacientes::with('planoSaude')->findOrFail($id);
        return response()->json($paciente);
    }

    public function update_paciente(Request $request, $id)
    {
        try {
            // Validação dos dados de entrada
            // Validar os dados do formulário
            $request->validate([
                'nome' => 'required|string|max:255',
                'sexo' => 'required|in:Masculino,Feminino',
                'cpf' => 'required|string|max:14|unique:pacientes,cpf,' . $id,
                'rg' => 'required|string|max:20|unique:pacientes,rg,' . $id,
                'data_nasc' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
                'email' => 'required|email|unique:pacientes,email,' . $id,
                'tel' => 'required|string|max:20',
                'rua' => 'required|string|max:255',
                'num' => 'required|integer|min:1',
                'cidade' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'cep' => 'required|string|max:10',
            ]);

            // Atualizar dados do paciente
            $paciente = Pacientes::findOrFail($id);
            $paciente->nome_completo = $request->input('nome');
            $paciente->sexo = $request->input('sexo');
            $paciente->cpf = $request->input('cpf');
            $paciente->rg = $request->input('rg');
            $paciente->data_nascimento = $request->input('data_nasc');
            $paciente->email = $request->input('email');
            $paciente->telefone = $request->input('tel');
            $paciente->rua = $request->input('rua');
            $paciente->numero = $request->input('num');
            $paciente->complemento = $request->input('complemento');
            $paciente->cidade = $request->input('cidade');
            $paciente->estado = $request->input('estado');
            $paciente->cep = $request->input('cep');
            $paciente->save();

            // Verificar se foi selecionado um plano de saúde
            if ($request->has('plano-saude') && $request->input('plano-saude') === 'true') {
                // Validar os dados do plano de saúde
                $request->validate([
                    'nome_plano' => 'required|string|max:255',
                    'numero_cartao' => 'required|string|max:255',
                ]);

                // Atualizar ou criar o plano de saúde associado
                $planoSaude = Plano_saude::updateOrCreate(
                    ['paciente_id' => $id],
                    [
                        'nome_plano' => $request->input('nome_plano'),
                        'nro_plano' => $request->input('numero_cartao'),
                    ]
                );
            } else {
                // Se não foi selecionado plano de saúde, remover se existir
                Plano_saude::where('paciente_id', $id)->delete();
            }

            // Redirecionar ou retornar resposta de sucesso
            return redirect('/painel-adm/gestao-paciente')->with('success', 'Paciente atualizado com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect()->back()->with('error', 'Já existe um paciente com este CPF, RG, email ou número do cartão do plano de saúde. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            //return redirect()->back()->with('error', $e->getMessage())->withInput();
            return redirect()->back()->with('error', 'Erro ao alterar o paciente. Por favor, tente novamente mais tarde.');
        }
    }

    public function delete_paciente($id)
    {
        Pacientes::findOrFail($id)->delete();
        return redirect('/painel-adm/gestao-paciente')->with('success', 'Paciente deletado com sucesso!');
    }

    public function search(Request $request)
    {
        try {
            $search = $request->input('search');
            if (!empty($search)) {
                $pacientes = Pacientes::where('nome_completo', 'like', '%' . $search . '%')->get();
            } else {
                $pacientes = Pacientes::all();
            }
            return view('gestao-paciente', ['pacientes' => $pacientes]);
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Nenhum paciente encontrado.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Erro na consulta ao banco de dados.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro inesperado.');
        }
    }
}
