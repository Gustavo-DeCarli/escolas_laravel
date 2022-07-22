@extends('base.index')

@section('container')
<form action='/escolas/formularioupdate' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <input type="hidden" value="{{ $formulario->id }}" name="id" />
    <div class="mb-2">
        <label for="ano" class="form-label">Ano</label>
        <input type="number" min="1900" max="2099" value="{{ $formulario->ano  }}" name="ano" class="form-control" id="ano">
    </div>
    <div class="mb-2">
        <label for="dt_inicio" class="form-label">Data de inicio</label>
        <input type="date" value="{{ $formulario->dt_inicio  }}" name="dt_inicio" class="form-control" id="dt_inicio">
    </div>
    <div class="mb-2">
        <label for="dt_fim" class="form-label">Nome Reduzido</label>
        <input type="date" value="{{ $formulario->dt_fim  }}" name="dt_fim" class="form-control" id="dt_fim">
    </div>
    <a class="btn btn-danger" href="/escolas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection