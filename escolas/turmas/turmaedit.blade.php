@extends('base.index')

@section('container')
<form action='/escolas/turmaupdate' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <input type="hidden" value="{{ $turma->id }}" name="id" />
    <div class="mb-2">
        <label for="curso_id" class="form-label">Curso</label>
        <select name="curso_id" id="curso_id" value="{{ $turma->curso_id  }}">
            <option value="3">*Cursos*</option>
        </select>
    </div>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Turma</label>
        <input type="text" value="{{ $turma->nome  }}" name="nome" class="form-control" id="nome">
    </div>
    <a class="btn btn-danger" href="/escolas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection