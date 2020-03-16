@extends('inc.master')

@section('conteudo-view')

    <div class="container">
                <H1>CRIANDO ALUNO</H1>

                 <!-- 'route' => 'disciplines.store', NOME DO CONTROLLER + ACAO -->
    {!! Form::open(['route' => 'students.store', 'method' => 'post']) !!}

        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'IDADE', 'input' => 'age', 'attributes' => ['placeholder' => 'IDADE', 'class' => 'form-control']])
        @include('inc.form.select', ['label' => 'INSTITUIÇÃO', 'select' => 'class_id', 'data' => $classroom_list, 'attributes' => ['placeholder' => 'Sala de Aula']])

        @include('inc.form.submit', ['input' => 'Cadastrar', 'attributes' => ['class' => 'btn btn-primary']])

    {!! Form::close() !!}

    </div>

@endsection


