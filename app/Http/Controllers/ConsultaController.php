<?php

namespace App\Http\Controllers;

use App\Models\paciente\Pacientes;
use App\Models\paciente\Plano_saude;
use App\Models\medico\Medicos;
use App\Models\medico\InformacaoProfissional;
use App\Models\consulta\Consulta;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class ConsultaController extends Controller
{
    public function show_pacientes(Request $request)
    {
        try {
            $search = $request->input('search');
            if (!empty($search)) {
                $pacientes = Pacientes::with('planoSaude')
                    ->where('nome_completo', 'like', '%' . $search . '%')
                    ->get();
            } else {
                $pacientes = Pacientes::with('planoSaude')->get();
            }
            return response()->json(['pacientes' => $pacientes]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Nenhum paciente encontrado.'], 404);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Erro na consulta ao banco de dados.'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro inesperado.'], 500);
        }
    }

    public function listar_medicos_disponivel()
    {
        $medicos = Medicos::has('informacaoProfissional')->with('informacaoProfissional')->get();
        return view('consultas-agendar', ['medicos' => $medicos]);
    }

    public function listar_nomes_medico()
    {
        $medicos = Medicos::has('informacaoProfissional')->with('informacaoProfissional')->get();
        return view('consultas-gerenciar', ['medicos' => $medicos]);
    }

    public function getInformacaoProfissional($medicoId)
    {
        $informacaoProfissional = InformacaoProfissional::where('medico_id', $medicoId)->first();
        if (!$informacaoProfissional) {
            return response()->json(['error' => 'Informação profissional não encontrada'], 404);
        }
        return response()->json($informacaoProfissional);
    }

    public static function getDiasDisponiveisPorMedicoId($id)
    {
        $informacao = InformacaoProfissional::where('medico_id', $id)->first();

        if (!$informacao) {
            return response()->json([]);
        }

        return response()->json($informacao);
    }

    public function horariosDisponiveis($id, $dia, $data)
    {
        $informacao = InformacaoProfissional::where('medico_id', $id)->first();

        // Obter consultas agendadas para o dia e médico especificados, excluindo as canceladas e remarcadas
        $consultas = Consulta::where('medico_id', $id)
            ->where('data_consulta', $data)
            ->whereNotIn('status', ['cancelado', 'reagendado'])
            ->pluck('hora_consulta')
            ->map(function ($hora) {
                return Carbon::parse($hora)->format('H:i');
            })
            ->toArray();

        $tempo_entre_consultas = $informacao->intevalo_consulta + $informacao->duracao_consulta;
        $horarios = [];
        $hora_inicio = Carbon::parse($informacao->{$dia . '_inicio'});
        $hora_fim = Carbon::parse($informacao->{$dia . '_fim'});
        $hora_almoco_inicio = Carbon::parse($informacao->{$dia . '_almoco_inicio'});
        $hora_almoco_fim = Carbon::parse($informacao->{$dia . '_almoco_fim'});

        $hora_atual = $hora_inicio;

        while ($hora_atual->lessThan($hora_fim)) {
            // Verifica se a hora atual não está dentro do intervalo de almoço e não coincide com nenhuma consulta existente
            if (($hora_atual->lessThan($hora_almoco_inicio) || $hora_atual->greaterThanOrEqualTo($hora_almoco_fim)) &&
                !in_array($hora_atual->format('H:i'), $consultas)
            ) {
                $horarios[] = $hora_atual->format('H:i');
            }
            $hora_atual->addMinutes($tempo_entre_consultas);
        }

        return response()->json($horarios);
    }

    public function marcarConsulta(Request $request)
    {
        try {
            // Validação básica dos dados
            $validatedData = $request->validate([
                'medico_consulta' => 'required|integer',
                'nome_paciente' => 'required|string|max:255',
                'telefone_paciente' => 'required|string|max:20',
                'data_selecionada' => 'required|date_format:d/m/Y',
                'hora_selecionado' => 'required|date_format:H:i'
            ]);

            // Criação da nova consulta
            $aux = new Consulta();
            $aux->medico_id = $validatedData['medico_consulta'];
            $aux->paciente_id = $request->paciente_consulta;
            $aux->nome_paciente = $validatedData['nome_paciente'];
            $aux->telefone_paciente = $validatedData['telefone_paciente'];
            $aux->data_consulta = DateTime::createFromFormat('d/m/Y', $validatedData['data_selecionada'])->format('Y-m-d');
            $aux->hora_consulta = $validatedData['hora_selecionado'];
            $aux->status = 'pendente';
            $aux->plano_saude = $request->input('plano_de_saude');
            $aux->save();

            return redirect('/painel-recepcionista/consultas-agendar')->with('success', 'Consulta marcada com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, redireciona com mensagem de erro
            return redirect('/painel-recepcionista/consultas-agendar')->with('error', 'Erro ao marcar consulta: ' . $e->getMessage());
        }
    }

    public function listarConsultas($id, $data)
    {
        $consultas = Consulta::where('medico_id', $id)
            ->where('data_consulta', $data)
            ->where('status', '!=', 'concluido')
            ->get();
        return response()->json($consultas);
    }

    public function listarConsultasPesquisa($id, $data, $search = null)
    {
        $nome_paciente = $search;

        $query = Consulta::where('medico_id', $id)
            ->where('data_consulta', $data)
            ->where('status', '!=', 'concluido');

        if (!empty($nome_paciente)) {
            $query->where('nome_paciente', 'like', '%' . $nome_paciente . '%');
        }

        $consultas = $query->get();
        return response()->json($consultas);
    }

    public function reagendarConsulta($id)
    {
        $consultas = Consulta::findOrFail($id);
        $consultas->status = 'reagendado';
        $consultas->update();
    }

    public function cancelarConsulta($id)
    {
        $consultas = Consulta::findOrFail($id);
        $consultas->status = 'cancelado';
        $consultas->update();
    }

    public function confirmarConsulta($id)
    {
        $consultas = Consulta::findOrFail($id);
        $consultas->status = 'confirmado';
        $consultas->update();
    }

    public function efetuarCadastroPaciente(Request $request, $id)
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

            $consulta = Consulta::findOrFail($id);
            $consulta->paciente_id = $pacientes->id;
            $consulta->telefone_paciente = $validatedData['tel'];
            $consulta->nome_paciente = $validatedData['nome'];
            $consulta->update();

            return redirect('/painel-recepcionista/consultas-gerenciar')->with('success', 'Paciente cadastrado com sucesso.');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect('/painel-recepcionista/consultas-gerenciar')->with('error', 'Já existe um paciente com este CPF, RG, email ou número do cartão do plano de saúde. Por favor, verifique os dados e tente novamente.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect('/painel-recepcionista/consultas-gerenciar')->with('error', 'Erro ao inserir o paciente. Por favor, tente novamente.');
        }
    }

    public function agendaMedico($data)
    {
        $usuario = Auth::user();
        $medico = Medicos::where('user_id', $usuario->id)->first();
        $consultas = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', '!=', 'pendente')
            ->get();

        $countConfirmado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'confirmado')
            ->count();

        $countReagendado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'reagendado')
            ->count();

        $countCancelado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'cancelado')
            ->count();

        $countConcluido = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'concluído')
            ->count();

        return response()->json([
            'consultas' => $consultas,
            'contagem' => [
                'confirmado' => $countConfirmado,
                'reagendado' => $countReagendado,
                'cancelado' => $countCancelado,
                'concluido' => $countConcluido,
            ]
        ]);
    }

    public function agendaMedicoPesquisar($data, $search = null)
    {
        $usuario = Auth::user();
        $medico = Medicos::where('user_id', $usuario->id)->first();

        $query = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', '!=', 'pendente');

        if (!empty($search)) {
            $query->where('nome_paciente', 'like', '%' . $search . '%');
        }

        $consultas = $query->get();

        $countConfirmado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'confirmado')
            ->count();

        $countReagendado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'reagendado')
            ->count();

        $countCancelado = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'cancelado')
            ->count();

        $countConcluido = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->where('status', 'concluído')
            ->count();

        return response()->json([
            'consultas' => $consultas,
            'contagem' => [
                'confirmado' => $countConfirmado,
                'reagendado' => $countReagendado,
                'cancelado' => $countCancelado,
                'concluido' => $countConcluido,
            ]
        ]);
    }

    public function listarConsultasMedico($data)
    {
        $usuario = Auth::user();

        $medico = Medicos::where('user_id', $usuario->id)->first();
        if (!$medico) {
            return response()->json(['error' => 'Médico não encontrado'], 404);
        }

        $consultas = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->whereIn('status', ['confirmado', 'concluído'])
            ->get();

        return response()->json([
            'consultas' => $consultas
        ]);
    }

    public function listaConsultaMedicoPesquisa($data, $search = null)
    {
        $usuario = Auth::user();
        $medico = Medicos::where('user_id', $usuario->id)->first();

        $query = Consulta::where('medico_id', $medico->id)
            ->where('data_consulta', $data)
            ->whereIn('status', ['confirmado', 'concluído']);

        if (!empty($search)) {
            $query->where('nome_paciente', 'like', '%' . $search . '%');
        }

        $consultas = $query->get();

        return response()->json([
            'consultas' => $consultas
        ]);
    }

    public function iniciarConsulta(Request $request)
    {
        try {
            $consulta = Consulta::findOrFail($request->id_consulta_inserir);
            $consulta->status = 'concluido';
            $consulta->peso_paciente = $request->peso;
            $consulta->altura_paciente = $request->altura;
            $consulta->alergia = $request->alergias;
            $consulta->cirurgia = $request->cirurgias;
            $consulta->medicamento = $request->medicamentos;
            $consulta->condicao_saude = $request->condicoes;
            if ($request->atividade_fisica == 'sim') {
                $consulta->atividade_fisica = true;
            } else {
                $consulta->atividade_fisica = false;
            }
            $consulta->vicio = $request->vicios;
            $consulta->anamnese = $request->anamnese;
            $consulta->cid = $request->primeiro_cid;
            $consulta->cid_opc = $request->segundo_cid;
            $consulta->diagnostico = $request->diagnostico;
            $consulta->prescricao = $request->prescricoes;
            $consulta->exames = $request->exames;
            $consulta->atestado = $request->atestados;
            $consulta->update();
            return redirect('/painel-medico/consultas')->with('success', 'Consulta concluída com sucesso!');
        } catch (ModelNotFoundException $e) {
            return redirect('/painel-medico/consultas')->with('error', 'Consulta não encontrada: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/painel-medico/consultas')->with('error', 'Ocorreu um erro ao concluir a consulta: ' . $e->getMessage());
        }
    }

    public function editarIniciarConsulta(Request $request)
    {
        try {
            $consulta = Consulta::findOrFail($request->id_consulta_inserir);
            $consulta->status = 'concluido';
            $consulta->peso_paciente = $request->peso;
            $consulta->altura_paciente = $request->altura;

            // Atribuir valores apenas se o campo de rádio correspondente for 'sim'
            $consulta->alergia = $request->input('editar-alergia-medicamentos') === 'sim' ? $request->alergias : null;
            $consulta->cirurgia = $request->input('editar-cirurgia') === 'sim' ? $request->cirurgias : null;
            $consulta->medicamento = $request->input('editar-medicamento-regular') === 'sim' ? $request->medicamentos : null;
            $consulta->condicao_saude = $request->input('editar-condicao-preexistente') === 'sim' ? $request->condicoes : null;
            $consulta->vicio = $request->input('editar-vicio') === 'sim' ? $request->vicios : null;

            $consulta->atividade_fisica = $request->input('atividade_fisica') === 'sim';
            $consulta->anamnese = $request->anamnese;
            $consulta->cid = $request->primeiro_cid;
            $consulta->cid_opc = $request->segundo_cid;
            $consulta->diagnostico = $request->diagnostico;
            $consulta->prescricao = $request->prescricoes;
            $consulta->exames = $request->exames;
            $consulta->atestado = $request->atestados;
            $consulta->update();

            return redirect('/painel-medico/consultas')->with('success', 'Consulta concluída com sucesso!');
        } catch (ModelNotFoundException $e) {
            return redirect('/painel-medico/consultas')->with('error', 'Consulta não encontrada: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/painel-medico/consultas')->with('error', 'Ocorreu um erro ao concluir a consulta: ' . $e->getMessage());
        }
    }

    public function detalhesConsulta($id)
    {
        $consulta = Consulta::findOrFail($id);
        return response()->json($consulta);
    }

    public function listarPacientesConsulta()
    {
        $usuario = Auth::user();
        $medico = Medicos::where('user_id', $usuario->id)->first();

        $consultas = Consulta::where('medico_id', $medico->id)
            ->whereNotNull('paciente_id')
            ->select('paciente_id', 'nome_paciente', 'plano_saude', DB::raw('MAX(data_consulta) as ultima_consulta'))
            ->groupBy('paciente_id', 'nome_paciente', 'plano_saude')
            ->get();

        return response()->json($consultas);
    }
}
