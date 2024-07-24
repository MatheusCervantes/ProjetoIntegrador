<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Financeiro;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class FinanceiroController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validação dos dados de entrada
            $validated = $request->validate([
                'data_hora' => 'required|date',
                'movimentacao' => 'required|string',
                'valor' => 'required|numeric',
                'tipo' => 'required|string',
            ]);

            // Criar a finaceiro associada ao usuário criado
            Financeiro::create($validated);

            return redirect('/painel-adm/financeiro')->with('success', 'Movimentação financeira cadastrada com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação
            //return redirect()->back()->with('error', $e->validator->errors());
            return redirect()->back()->with('error', 'Erro ao cadastrar movimentação financeira.');
        } catch (\Exception $e) {
            // Captura outros tipos de exceção
            return redirect()->back()->with('error', 'Erro ao inserir movimentação financeira. Por favor, tente novamente mais tarde.');
        }
    }

    public function show($id)
    {
        $financeiro = Financeiro::findOrFail($id);
        return response()->json($financeiro);
    }

    public function update_financeiro(Request $request, $id)
    {
        try {
            // Valida os dados da solicitação
            $validated = $request->validate([
                'data_hora' => 'required|date',
                'movimentacao' => 'required|string',
                'valor' => 'required|numeric',
                'tipo' => 'required|string',
            ]);

            // Encontra o registro ou lança uma exceção se não encontrado
            $financeiro = Financeiro::findOrFail($id);

            // Atualiza o registro com os dados validados
            $financeiro->update($validated);

            // Redireciona com uma mensagem de sucesso
            return redirect('/painel-adm/financeiro')
                ->with('success', 'Movimentação financeira atualizada com sucesso!');
        } catch (ValidationException $e) {
            // Captura os erros de validação e redireciona com mensagens de erro
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Erro de validação: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Captura outros tipos de exceções e redireciona com uma mensagem genérica
            return redirect()->back()
                ->with('error', 'Erro ao atualizar movimentação financeira. Por favor, tente novamente mais tarde.');
        }
    }

    public function delete_financeiro($id)
    {
        Financeiro::findOrFail($id)->delete();
        return redirect('/painel-adm/financeiro')->with('success', 'Movimentação financeira deletada com sucesso!');
    }

    public function search(Request $request)
    {
        try {
            //Pesquisa
            $search = $request->input('search');
            $startDate = $request->input('startDate');
            $endDate = $request->input('endDate');
            $filtroMovimentacao = $request->input('filtro_movimentacao');

            // Verifique se as datas são válidas
            if ($startDate && !$this->isValidDate($startDate)) {
                throw new \Exception('Data de início inválida.');
            }
            if ($endDate && !$this->isValidDate($endDate)) {
                throw new \Exception('Data de término inválida.');
            }

            $query = Financeiro::query();

            if (!empty($search)) {
                $query->where('tipo', 'like', '%' . $search . '%');
            }

            if (!empty($filtroMovimentacao)) {
                $query->where('movimentacao', $filtroMovimentacao);
            }

            if (!empty($startDate) && !empty($endDate)) {
                // Usar DATE() para filtrar apenas pela parte da data
                $query->whereBetween(DB::raw('DATE(data_hora)'), [$startDate, $endDate]);
            }
            $financeiro = $query->get();
            //Fim Pequisa

            //Dados mensais de entrada saída etc ...
            $dataInicio = Carbon::now()->startOfMonth();
            $dataFim = Carbon::now()->endOfMonth();
            $totalEntrada = Financeiro::whereBetween(DB::raw('DATE(data_hora)'), [$dataInicio, $dataFim])
                ->where('movimentacao', 'entrada')
                ->sum('valor');

            // Soma os valores de saídas no mês atual
            $totalSaida = Financeiro::whereBetween(DB::raw('DATE(data_hora)'), [$dataInicio, $dataFim])
                ->where('movimentacao', 'saida')
                ->sum('valor');
            // Soma geral dos valores no mês atual
            $totalGeral = Financeiro::whereBetween(DB::raw('DATE(data_hora)'), [$dataInicio, $dataFim])
                ->sum('valor');

            return view('financeiro', [
                'financeiro' => $financeiro,
                'totalEntrada' => $totalEntrada,
                'totalSaida' => $totalSaida,
                'totalGeral' => $totalGeral,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Nenhuma movimentação financeira encontrada.');
        } catch (QueryException $e) {
            // Debug: Exiba a mensagem de erro
            Log::error('Erro na consulta:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Erro na consulta ao banco de dados.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro inesperado: ' . $e->getMessage());
        }
    }

    public function dadosParaGrafico()
    {
        try {
            $anoAtual = Carbon::now()->year;

            // Recuperar entradas e saídas para cada mês usando DB::select
            $entradas = DB::select("
                SELECT MONTH(data_hora) as mes, SUM(valor) as total
                FROM financeiro
                WHERE movimentacao = 'entrada' AND YEAR(data_hora) = ?
                GROUP BY mes
            ", [$anoAtual]);

            $saidas = DB::select("
                SELECT MONTH(data_hora) as mes, SUM(valor) as total
                FROM financeiro
                WHERE movimentacao = 'saida' AND YEAR(data_hora) = ?
                GROUP BY mes
            ", [$anoAtual]);

            // Converter resultados para array associativo mes => total
            $entradasArray = array_fill(1, 12, 0);
            $saidasArray = array_fill(1, 12, 0);

            foreach ($entradas as $entrada) {
                $entradasArray[$entrada->mes] = $entrada->total;
            }

            foreach ($saidas as $saida) {
                $saidasArray[$saida->mes] = $saida->total;
            }

            return response()->json([
                'entradas' => array_values($entradasArray),
                'saidas' => array_values($saidasArray),
            ]);
        } catch (\Exception $e) {
            // Log de erro e retorno de mensagem amigável
            Log::error('Erro ao recuperar dados para gráfico: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao recuperar dados'], 500);
        }
    }

    private function isValidDate($date)
    {
        return \DateTime::createFromFormat('Y-m-d', $date) !== false;
    }
}
