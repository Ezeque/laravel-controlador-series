@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<form method="post">
@csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <Input type="text" class="form-control" name="nome" id="nome"></Input>

        <label for="ep-num">Número de episódios</label>
        <Input type="number" class="form-control" name="num-ep" id="num-ep"></Input>
    </div>
    <button class="btn btn-primary mb-3">Adicionar</button>
</form>
</div>
@endsection