@extends('layout')

@section('cabecalho')
Temporadas
@endsection


@section('conteudo')

<div class="col-7 mt-3 mb-2">
    <h4>Descrição:</h4>
    <div class="border-left">{{$series->descricao}}</div>
</div>

@foreach($temporadas as $temporadas)
<a href="#" class="text-decoration-none">
    <ul class="list-group" onclick="toggleEpisodios('episodios-temporada-{{$temporadas->numero}}')"
        id="temporada-num-{{$temporadas->numero}}">
        <!--PARTE VISÍVEL DO ITEM TEMPORADA -->
        <li class="list-group-item d-flex justify-content-between align-items-center bg-secondary text-white"
            cursor="pointer">
            {{$temporadas->numero}}º Temporada
            <span
                class="badge bg-dark">{{$temporadas->getEpsAssistidos()->count()}}/{{$temporadas->episodios->count()}}</span>
        </li>
    </ul>
</a>
<!-- PARTE INVISÍVEL -->
<form method="post" action="/series/{{$temporadas->id}}/temporadas/salvar">
    @csrf
    <ul class="list-group mb-3" id="episodios-temporada-{{$temporadas->numero}}" hidden>
        @foreach($temporadas->episodios as $episodio)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Episódio {{$episodio->numero}}
            <input type="checkbox" name="episodios[]" value="{{$episodio->id}}"
                {{($episodio->assistido) ? 'checked' : ''}}>
        </li>
        @endforeach
        <button class="btn btn-primary col-1 mt-2">Salvar</button>
    </ul>
</form>

@endforeach
@endsection