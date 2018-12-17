
@extends('app')

@section('conteudo')

<div class="container">
    <a href="{{ route('habitos.create') }}" class="btn btn-block btn-success mt-4 mb-5">Criar novo habito</a>
    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">DESCRICAO</th>
            <th scope="col">TIPO</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($habitos as $hab)
            <tr>
                <td>{{$hab->id}}</td>
                <td>{{$hab->nome}}</td>
                <td>{{$hab->descricao}}</td>
                <td>
                    @if($hab->tp_habito == 'B')
                        Bom
                    @elseif ($hab->tp_habito == 'R')
                        Ruim
                    @endif
                </td>
                <td>
                    <a href="{{ route('habitos.edit', ['id'=>$hab->id]) }}" class="btn-sm btn-info">Edit</a>
                    <a href="{{ route('habitos.destroy', ['id'=>$hab->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
