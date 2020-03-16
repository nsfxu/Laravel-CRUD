@extends('inc.master')

@section('conteudo-view')

    <div class="container">

        <h1>EDITANDO PROFESSOR</h1>

        {!! Form::model($professor, ['route' => ['teachers.update', $professor->id], 'method' => 'put']) !!}

        @include('inc.form.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => 'NOME', 'class' => 'form-control']])
        @include('inc.form.input', ['label' => 'IDADE', 'input' => 'age', 'attributes' => ['placeholder' => 'IDADE', 'class' => 'form-control']])
        @include('inc.form.select', ['label' => 'SALA DE AULA', 'select' => 'class_id', 'data' => $classroom_list, 'attributes' => ['placeholder' => 'SALA']])
        @include('inc.form.select', ['label' => 'DISCIPLINA', 'select' => 'discipline_id', 'data' => $discipline_list, 'attributes' => ['placeholder' => 'DISCIPLINA']])

      
        @include('inc.form.submit', ['input' => 'Atualizar'])

        {!! Form::close() !!}

    </div>

@endsection


