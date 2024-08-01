<?php

namespace App\Http\Controllers;

use App\Models\paciente\Pacientes;
use App\Models\medico\Medicos;
use App\Models\medico\InformacaoProfissional;
use App\Models\consulta\Consulta;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\ValidationException;
use PSpell\Config;

class ConsultaController extends Controller
{
    public function show_pacientes(Request $request)
    {
        try {
            $search = $request->input('search');
            if (!empty($search)) {
                $pacientes = Pacientes::where('nome_completo', 'like', '%' . $search . '%')->get();
            } else {
                $pacientes = Pacientes::all();
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
            $aux->paciente_id = $request->input('paciente_id');
            $aux->nome_paciente = $validatedData['nome_paciente'];
            $aux->telefone_paciente = $validatedData['telefone_paciente'];
            $aux->data_consulta = DateTime::createFromFormat('d/m/Y', $validatedData['data_selecionada'])->format('Y-m-d');
            $aux->hora_consulta = $validatedData['hora_selecionado'];
            $aux->status = 'pendente';
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
            ->get();
        return response()->json($consultas);
    }

    public function listarConsultasPesquisa($id, $data, Request $request)
    {
        $search = $request->input('pesquisar_consulta');

        $query = Consulta::where('medico_id', $id)
            ->where('data_consulta', $data);

        if (!empty($search)) {
            $query->where('nome_paciente', 'like', '%' . $search . '%');
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

    public function cadastrarPaciente()
    {
    }
}
