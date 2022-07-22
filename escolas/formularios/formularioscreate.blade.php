@extends('base.index')

@section('container')
<form action='/escolas/formulariostore' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    <div class="mb-2">
        <label for="ano" class="form-label">Ano</label>
        <input type="number" min="1900" max="2099"  name="ano" class="form-control" id="ano">
    </div>
    <div class="mb-2">
        <label for="nome_reduzido" class="form-label">Nome Reduzido</label>
        <input type="text" name="nome_reduzido" class="form-control" id="nome_reduzido">
    </div>
    <a class="btn btn-danger" href="/escolas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection