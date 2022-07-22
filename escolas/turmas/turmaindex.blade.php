@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/escolas/turmacreate">Nova pessoa</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Turma</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->curso}}</td>
                <td>{{$turma->nome_nome_turma}}</td>
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