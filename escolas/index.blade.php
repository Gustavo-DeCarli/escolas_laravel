@extends('base.index')

@section('container')
<a class="btn btn-success mt-2 mb-2" href="/escolas/cursocreate">Novo curso</a>
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

<a class="btn btn-success mb-2" href="/escolas/formulariocreate">Novo formulário</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Ano</th>
            <th>Data de início</th>
            <th>Data de término</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($formularios as $formulario)
            <tr>
                <td>{{$formulario->ano}}</td>
                <td>{{$formulario->dt_inicio}}</td>
                <td>{{$formulario->dt_fim}}</td>
                <td>
                    <a class="btn btn-warning" href="/escolas/{{$formulario->id}}/formularioedit">Editar</a>
                    <a class="btn btn-info" href="/escolas/{{$formulario->id}}/formularioshow">Ver</a>
                    <a class="btn btn-danger" href="/escolas/{{$formulario->id}}/formulariodestroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success mb-2" href="/escolas/turmacreate">Nova Turma</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Turma</th>
            <th>Curso</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->nome}}</td>
                <td>{{$turma->curso_nome}}</td>
            <td>
                    <a class="btn btn-warning" href="/escolas/{{$formulario->id}}/formularioedit">Editar</a>
                    <a class="btn btn-info" href="/escolas/{{$formulario->id}}/formularioshow">Ver</a>
                    <a class="btn btn-danger" href="/escolas/{{$formulario->id}}/formulariodestroy">Remover</a>
            </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection
