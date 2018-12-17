<?php

namespace App\Http\Controllers;

use App\Historico;
use Illuminate\Http\Request;
use App\Http\Requests\HistoricoRequest;

class HistoricosController extends Controller
{
    //
    public function index(){
        $historicos = Historico::all();
        $dados['titulo'] = "Historicos";
        return view('historicos.index', ['historicos'=>$historicos], $dados);
    }
    public function create(){
        $dados['titulo'] = "Novo historico";
        return view('historicos.create', $dados);
    }
    public function store(HistoricoRequest $request){
        $novoHistorico = $request->all();
        Historico::create($novoHistorico);
        return redirect()->route('historicos');
    }

    public function destroy($id){
        Historico::find($id)->delete();
        return redirect()->route('historicos');
    }

    public function edit($id){
        $dados['titulo'] = "Editar Historico";
        $historico = Historico::find($id);
        return view('historicos.edit', compact('historico'), $dados);
    }

    public function update(HistoricoRequest $request, $id){
        $historico = Historico::find($id)->update($request->all());
        return redirect()->route('historicos');
    }



}
