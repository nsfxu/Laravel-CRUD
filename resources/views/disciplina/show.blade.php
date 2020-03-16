@extends('inc.master')

@section('conteudo-view')

<header>

    <center>

        <h2>ID:</h2><h4>{{ $disciplina->id }}</h4>

        <h2>NOME:</h2><h4>{{ $disciplina->name }}</h4>

        <h2>SIGLA:</h2><h4>{{ $disciplina->sigla }}</h4>

    </center>

</header>



@endsection