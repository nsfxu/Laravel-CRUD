@extends('inc.master')

@section('conteudo-view')

<header>

    <center>

    <h2>ID:</h2>      <h4>{{ $professor->id }}</h4>
    <h2>IDADE:</h2>   <h4>{{ $professor->age }}</h4>
    <h2>NOME:</h2>    <h4>{{ $professor->name }}</h4>
    <h2>SALA:</h2>    <h4>{{ $professor->classrooms->name }}</h4>
    <h2>DISCIPLINA:</h2>    <h4>{{ $professor->disciplines->name }}</h4>




    </center>

</header>



@endsection