@extends('base.index')

@section('container')
    <form action='/escolas/salvarform' method='post' onchange="myFunction();">
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
            <select class='form-control' name="estado" id="estado">
                <option value=""></option>
            </select>
        </div>
        <div class="mb-2">
            <label for="cidade" class="form-label">Cidade</label>
            <select class='form-control' name="cidade" id="cidade">
                <option value=""></option>
            </select>
        </div>
        <div class="mb-2">
            <label for="transporte" class="form-label">Transporte</label>
            <select class='form-control' name="transporte" id="transporte">
                <option value="Ônibus">Ônibus</option>
                <option value="Micro-ônibus">Micro-ônibus</option>
                <option value="Van">Van</option>
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
                <option value="">Selecione uma opção</option>
                @foreach ($cursos as $curso )
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label for="curso_id" class="form-label">Turmas</label>
            <select name="curso_id" id="curso_id">
                <option value="">Selecione uma opção</option>
                @foreach ($turmas as $turma )
                <option value="{{$turma->id}}">{{$turma->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
        <label>Pagou Diferença:</label><br>
        <input type='radio' id='pagamento' name='pagamento' value='1'/>
        <label for="pagamento">Sim</label>
        <input type='radio' id='pagamento' name='pagamento' value='2'/>
        <label for="pagamento">Não</label>
        </div>

        <div class='mb-2' id='m1' hidden>
            <label for='diferenca'>Valor pago:</label><br>
            <input class='form-control' type='number' step=0.01 id='diferenca' placeholder="Insira o valor">
        </div>


        <a class="mt-2 btn btn-danger" href="/escolas">Voltar</a>
        <button type="submit" class="mt-2 btn btn-primary">Enviar</button>
    </form>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

@endsection
