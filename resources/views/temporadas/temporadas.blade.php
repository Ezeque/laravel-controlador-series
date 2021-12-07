@extends('layout')

@section('cabecalho')
Temporadas
@endsection


@section('conteudo')

@foreach($temporadas as $temporadas)
<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
{{$temporadas->numero}}º Temporada
</li>
</ul>
@endforeach
@endsection