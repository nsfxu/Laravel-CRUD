@extends('inc.master')

@section('conteudo-view')

<header>

    <center>

        <h2>ID:</h2> <h4>{{ $classe->id }}</h4>
        <h2>NOME:</h2> <h4>{{ $classe->name }}</h4>

    </center>

</header>



@endsection