@extends('base.index')

@section('container')
    <form action='/escolas/turmastore' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />

        <div class="mb-2">
            <label for="nome" class="form-label">Turma</label>
            <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <div class="mb-2">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" id="cpf">
        </div>
        <div class="mb-2">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado">
            </select>
        </div>
        <div class="mb-2">
            <label for="transporte" class="form-label">Transporte</label>
            <select name="transporte" id="transporte">
                <option value="2">*Transporte*</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Poder Publico Responsável:</label><br>
            <input type="radio" id="poder" name="poder" value="Municipio">
            <label for="municipio">Municipio</label>
            <input type="radio" id="poder" name="poder" value="estado2">
            <label for="estado2">Estado</label>
        </div>

        <div class="mb-2">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" id="curso_id">
                <option value="2">*Cursos*</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="dfpg" class="form-label">Diferença Paga</label>
            <input type="number" step=0.01 name="dfpg" class="form-control" id="dfpg">
        </div>
        <a class="btn btn-danger" href="/escolas">Voltar</a>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection