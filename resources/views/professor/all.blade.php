@extends('inc.master')

@section('conteudo-view')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>       
@endif


<div class="row">
    <div class="container">

        <a class="btn btn-primary" href="{{ route('teachers.create') }}" style="float: right">Novo Registro</a>

    <table class="table">
        <thead>
        <tr>    
            <th>#</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sala</th>
            <th>Disciplina</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>

            @foreach($professor as $x)
            <tr>

                <td>{{ $x->id }}</td>
                <td>{{ $x->name }}</td>
                <td>{{ $x->age }}</td>
                <td>{{ $x->classrooms->name }}</td>
                <td>{{ $x->disciplines->name }}</td>


                <td>

                    {!! Form::open(['route' => ['teachers.destroy', $x->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href="{{ route('teachers.show', $x->id) }}" class="btn btn-primary">Mais Detalhes</a>
                    <a href="{{ route('teachers.edit', $x->id) }}" class="btn btn-warning">Editar</a>
                </td> 
            </tr>
            @endforeach

        </tbody>

    </table>      

    </div>
</div>

@endsection


