@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Editar Historico</h1>
        <div class="form">
            @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['route' => ["historicos.update", $historico->id], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('habito_id', 'Habito:') !!}
                    {!! Form::select('habito_id',
                        \App\Habito::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('data', 'Data:') !!}
                    {!! Form::date('data', $historico->data, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('hora', 'Hora:') !!}
                    {!! Form::text('hora', $historico->hora, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Salvar Historico', ['class' => 'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
        </div>
    </div>


@endsection