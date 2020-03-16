@extends('inc.master')

@section('conteudo-view')

    <div class="container">
<H1>CRIANDO DISCIPLINA</H1>

                 <!-- 'route' => 'disciplines.store', NOME DO CONTROLLER + ACAO -->
    {!! Form::open(['route' => 'disciplines.store', 'method' => 'post']) !!}

        @include('inc.form.input', ['label' => 'SIGLA', 'input' => 'sigla', 'attributes' => ['placeholder' => 'SIGLA', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])

        @include('inc.form.submit', ['input' => 'Cadastrar', 'attributes' => ['class' => 'btn btn-primary']])

    {!! Form::close() !!}

    </div>

@endsection


