@extends('inc.master')

@section('conteudo-view')

    <div class="container">
                <H1>CRIANDO PROFESSOR</H1>

                 <!-- 'route' => 'disciplines.store', NOME DO CONTROLLER + ACAO -->
    {!! Form::open(['route' => 'teachers.store', 'method' => 'post']) !!}

        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'IDADE', 'input' => 'age', 'attributes' => ['placeholder' => 'IDADE', 'class' => 'form-control']])
        @include('inc.form.select', ['label' => 'SALA DE AULA', 'select' => 'class_id', 'data' => $classroom_list, 'attributes' => ['placeholder' => 'SALA']])
        @include('inc.form.select', ['label' => 'DISCIPLINA', 'select' => 'discipline_id', 'data' => $discipline_list, 'attributes' => ['placeholder' => 'DISCIPLINA']])

        @include('inc.form.submit', ['input' => 'Cadastrar', 'attributes' => ['class' => 'btn btn-primary']])

    {!! Form::close() !!}

    </div>

@endsection


