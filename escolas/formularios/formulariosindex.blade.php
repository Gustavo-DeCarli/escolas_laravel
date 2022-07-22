@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/escolas/formulariocreate">Nova pessoa</a>
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
@endsection