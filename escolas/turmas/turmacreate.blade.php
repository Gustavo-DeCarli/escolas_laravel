@extends('base.index')

@section('container')
<form action='/escolas/salvaform' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />

    <div class="mb-2">
        <label for="nomea" class="form-label">Nome do Aluno</label>
        <input type="text" name="nomea" class="form-control" id="nomea">
    </div>
    <div class="mb-2">
        <label for="Turma" class="form-label">Turma</label>
        <select name="Turma" id="Turma">
            <option value="2">*Cursos*</option>
        </select>
    </div>
    <a class="btn btn-danger" href="/escolas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
