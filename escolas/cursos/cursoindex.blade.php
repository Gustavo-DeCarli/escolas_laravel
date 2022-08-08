@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/escolas/cursocreate">Nova pessoa</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Nome Reduzido</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->nome}}</td>
                <td>{{$curso->nome_reduzido}}</td>
                <td>
                    <a class="btn btn-warning" href="/escolas/{{$curso->id}}/cursoedit">Editar</a>
                    <a class="btn btn-info" href="/escolas/{{$curso->id}}/cursoshow">Ver</a>
                    <a class="btn btn-danger" href="/escolas/{{$curso->id}}/cursodestroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection