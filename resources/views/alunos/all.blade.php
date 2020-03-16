@extends('inc.master')

@section('conteudo-view')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>       
@endif


<div class="row">
    <div class="container">

        <a class="btn btn-primary" href="{{ route('students.create') }}" style="float: right">Novo Registro</a>

    <table class="table">
        <thead>
        <tr>    
            <th>#</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sala</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>

            @foreach($aluno as $x)
            <tr>

                <td>{{ $x->id }}</td>
                <td>{{ $x->name }}</td>
                <td>{{ $x->age }}</td>
                <td>{{ $x->classrooms->name }}</td>

                <td>

                    {!! Form::open(['route' => ['students.destroy', $x->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href="{{ route('students.show', $x->id) }}" class="btn btn-primary">Mais Detalhes</a>
                    <a href="{{ route('students.edit', $x->id) }}" class="btn btn-warning">Editar</a>
                </td> 
            </tr>
            @endforeach

        </tbody>

    </table>      

    </div>
</div>

@endsection


