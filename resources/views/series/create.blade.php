@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<form method="post">
    <div class="form-group">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <label for="nome">Nome</label>
        <Input type="text" class="form-control" name="nome" id="nome"></Input>
    </div>
    <button class="btn btn-primary mb-3">Adicionar</button>
</form>

@endsection