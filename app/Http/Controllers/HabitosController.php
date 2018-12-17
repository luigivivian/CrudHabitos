<?php

namespace App\Http\Controllers;
use App\Habito;
use App\Http\Requests\HabitoRequest;
use Illuminate\Http\Request;

class HabitosController extends Controller
{
    //index, listagem
    public function index(){
        $titulo = "Meus Habitos";
        $habitos = Habito::all();
        return view('habitos.index', ['habitos' => $habitos, 'titulo'=>$titulo]);
    }

    //abrindo formulario
    public function create(){
        $dados['titulo'] = "Criar novo habito";
        return view('habitos.create', $dados);
    }
    //Metodo para receber post formulario
    public function store(HabitoRequest $request){
        $novoHabito = $request->all();
        Habito::create($novoHabito);
        return redirect()->route('habitos');
    }
    //metodo responsavel por deletar registro
    public function destroy($id){
        Habito::find($id)->delete();
        return redirect()->route('habitos');
    }
    //Chamada view para update
    public function edit($id){
        $dados['titulo'] = 'Editar Habito';
        $habito = Habito::find($id);
        return view('habitos.edit', compact('habito'), $dados);
    }
//    Atualizando dados
    public function update(HabitoRequest $request, $id){
        $habito = Habito::find($id)->update($request->all());
        return redirect()->route('habitos');
    }


}
