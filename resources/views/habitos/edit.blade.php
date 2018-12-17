@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Editar Habito: {{$habito->nome}}</h1>
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
            {!! Form::open(['route' => ["habitos.update", $habito->id], 'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $habito->nome, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::textarea('descricao', $habito->descricao, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tp_habito', 'Tipo:') !!}
                {!! Form::select('tp_habito', array('B'=>'Bom', 'R'=>'Ruim'),$habito->tp_habito,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('objetivo', 'Objetivo:') !!}
                {!! Form::number('objetivo', $habito->objetivo, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_inicio_controle', 'Data:') !!}
                {!! Form::date('data_inicio_controle', $habito->data_inicio_controle, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar hábito', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection