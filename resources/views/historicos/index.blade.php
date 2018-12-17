
@extends('app')

@section('conteudo')

<div class="container">
    <a href="{{ route('historicos.create') }}" class="btn btn-block btn-success mt-4 mb-5">Criar novo historico</a>
    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">HÁBITO</th>
            <th scope="col">DATA</th>
            <th scope="col">OPÇÕES</th>

        </tr>
        </thead>
        <tbody>
        @foreach($historicos as $h)
            <tr>
                <td>{{$h->id}}</td>
                <td>{{$h->habito->nome}}</td>
                <td>{{$h->data}} -- {{$h->hora}}</td>
                <td>
                    <a href="{{ route('historicos.edit', ['id'=>$h->id]) }}" class="btn-sm btn-info">Edit</a>
                    <a href="{{ route('historicos.destroy', ['id'=>$h->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
