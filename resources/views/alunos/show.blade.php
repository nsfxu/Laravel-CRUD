@extends('inc.master')

@section('conteudo-view')

<header>

    <center>

    <h2>ID:</h2>      <h4>{{ $aluno->id }}</h4>
    <h2>IDADE:</h2>   <h4>{{ $aluno->age }}</h4>
    <h2>NOME:</h2>    <h4>{{ $aluno->name }}</h4>
    <h2>SALA:</h2>    <h4>{{ $aluno->classrooms->name }}</h4>



    </center>

</header>



@endsection