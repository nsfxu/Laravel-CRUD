@extends('inc.master')

@section('conteudo-view')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>       
@endif

<div class="row">
    <div class="container">

        <a class="btn btn-primary" href="{{ route('disciplines.create') }}" style="float: right">Nova</a>

    <table class="table">
        <thead>
        <tr>    
            <th>#</th>
            <th>Sigla</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>

            @foreach($disciplina as $x)
            <tr>

                <td>{{ $x->id }}</td>
                <td>{{ $x->sigla }}</td>
                <td>{{ $x->name }}</td>

                <td>

                    {!! Form::open(['route' => ['disciplines.destroy', $x->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href="{{ route('disciplines.show', $x->id) }}" class="btn btn-primary">Mais Detalhes</a>
                    <a href="{{ route('disciplines.edit', $x->id) }}" class="btn btn-warning">Editar</a>
                </td> 
            </tr>
            @endforeach

        </tbody>

    </table>      

    </div>
</div>

@endsection


