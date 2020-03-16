@extends('inc.master')

@section('conteudo-view')

    <div class="container">

        <h1>EDITANDO DISCIPLINA</h1>

        {!! Form::model($aluno, ['route' => ['students.update', $aluno->id], 'method' => 'put']) !!}

        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'IDADE', 'input' => 'age', 'attributes' => ['placeholder' => 'IDADE', 'class' => 'form-control']])
        @include('inc.form.select', ['label' => 'SALA', 'select' => 'class_id', 'data' => $classroom_list, 'attributes' => ['placeholder' => 'Sala de Aula']])

        @include('inc.form.submit', ['input' => 'Atualizar'])

        {!! Form::close() !!}

    </div>

@endsection


