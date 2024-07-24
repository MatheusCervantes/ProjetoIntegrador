<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Financeiro;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    public function relatorio_financeiro(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $startDate = Carbon::createFromFormat('Y-m-d', $startDate)->format('Y-m-d');
        $endDate = Carbon::createFromFormat('Y-m-d', $endDate)->format('Y-m-d');
        $finaceiro = Financeiro::whereBetween(DB::raw('DATE(data_hora)'), [$startDate, $endDate])->get();
        return view('gerar_relatorio', ['relatorio_financeiro' => $finaceiro]);
    }
}
