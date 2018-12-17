@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Novo Habito</h1>
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
            {!! Form::open(['route' => 'habitos.store']) !!}
                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('descricao', 'Descrição:') !!}
                    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tp_habito', 'Tipo:') !!}
                    {!! Form::select('tp_habito', array('B'=>'Bom', 'R'=>'Ruim'),'M',['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('objetivo', 'Objetivo:') !!}
                    {!! Form::number('objetivo', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('data_inicio_controle', 'Data:') !!}
                    {!! Form::date('data_inicio_controle', '2018-12-17 00:00:00', ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::submit('Criar hábito', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection