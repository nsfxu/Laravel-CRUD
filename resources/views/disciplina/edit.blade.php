@extends('inc.master')

@section('conteudo-view')

    <div class="container">

        <h1>EDITANDO DISCIPLINA</h1>

        {!! Form::model($disciplina, ['route' => ['disciplines.update', $disciplina->id], 'method' => 'put']) !!}

        @include('inc.form.input', ['label' => 'SIGLA', 'input' => 'sigla', 'attributes' => ['placeholder' => 'SIGLA', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])

        @include('inc.form.submit', ['input' => 'Atualizar'])

        {!! Form::close() !!}

    </div>

@endsection


