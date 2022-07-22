@extends('base.index')

@section('container')
<form action='/escolas/turmastore' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />

    <div class="mb-2">
        <label for="nome" class="form-label">Turma</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="mb-2">
        <label for="curso_id" class="form-label">Curso</label>
        <select name="curso_id" id="curso_id">
            <option value="2">*Cursos*</option>
        </select>
    </div>
    <a class="btn btn-danger" href="/escolas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection