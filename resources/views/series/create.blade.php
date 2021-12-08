@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post">
    <div class="row">
        @csrf
        <div class="col col-8"><label for="nome">Nome</label>
            <Input type="text" class="form-control" name="nome" id="nome" autocomplete="off"></Input>
        </div>
        <div class="col col-2"><label for="qtd_temporadas">N. Temporadas</label>
            <Input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas"></Input>
        </div>
        <div class="col col-2"><label for="qtd_episodios">N. Episodios</label>
            <Input type="number" class="form-control" name="qtd_episodios" id="qtd_episodios"></Input>
        </div>
    </div>
    <button class="btn btn-primary mt-3">Adicionar</button>
</form>

@endsection