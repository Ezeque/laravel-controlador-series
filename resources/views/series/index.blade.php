@extends('layout')

@section('cabecalho')
Lista de séries
@endsection

@section('conteudo')
<a href="/series/create" class="btn btn-primary mb-3">Adicionar Série</a>

<ul class="list-group">
    <?php foreach($series as $series): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">{{$series->nome}}
        <form class="" method="post" action="/series/remove/{{$series->id}}" 
        onsubmit="return confirm('Tem certeza que deseja excluir {{$series->nome}} da sua lista?') ">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Excluir</button>
        </form>
    </li>
    <?php endforeach; ?>
</ul>
@endsection