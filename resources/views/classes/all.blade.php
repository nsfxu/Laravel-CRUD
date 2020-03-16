@extends('inc.master')

@section('conteudo-view')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>       
@endif


<div class="row">
    <div class="container">

        <a class="btn btn-primary" href="{{ route('classrooms.create') }}" style="float: right">Novo Registro</a>

    <table class="table">
        <thead>
        <tr>    
            <th>#</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>

            @foreach($classe as $x)
            <tr>

                <td>{{ $x->id }}</td>
                <td>{{ $x->name }}</td>

                <td>

                    {!! Form::open(['route' => ['classrooms.destroy', $x->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href="{{ route('classrooms.show', $x->id) }}" class="btn btn-primary">Mais Detalhes</a>
                    <a href="{{ route('classrooms.edit', $x->id) }}" class="btn btn-warning">Editar</a>
                </td> 
            </tr>
            @endforeach

        </tbody>

    </table>      

    </div>
</div>

@endsection


