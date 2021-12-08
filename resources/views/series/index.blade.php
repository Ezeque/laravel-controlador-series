@extends('layout')

@section('cabecalho')
Lista de séries
@endsection

@section('conteudo')
<a href="/series/create" class="btn btn-primary mb-3">Adicionar Série</a>

<ul class="list-group">
    @foreach($series as $series)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <span id="serie-nome-{{$series->id}}">{{$series->nome}}</span>

        <!-- INPUT EDITAR SÉRIE -->
        <div class="input-group w-50" hidden id="input-serie-{{ $series->id }}">
            <input id="name-input" type="text" class="form-control" value="{{ $series->nome }}">
            <div class="input-group-append">
                <button class="btn btn-primary" onclick="alterSerie('{{$series->id}}')">
                    <i class="fas fa-check"></i>
                </button>
                @csrf
            </div>
        </div>
        <!-- FIM INPUT EDITAR SÉRIE -->
        <span class="d-flex">

        <form class="" method="post" action="/series/remove/{{$series->id}}"
            onsubmit="return confirm('Tem certeza que deseja excluir {{$series->nome}} da sua lista?') ">
            @csrf
            @method('DELETE')
                <button type="button" id="edit-serie-{{$series->id}}" class="btn btn-info" 
                onclick="toggleinput('{{$series->id}}')"><i class="fas fa-edit"></i></button>
                <a href="/series/{{$series->id}}/temporadas" class="btn btn-info">
                <i class="fas fa-external-link-square-alt"></i></a>
                <button type="submit" class="btn btn-danger ml-1"><i class="fas fa-trash-alt"></i></button>
        </form>
        </span>
    </li>

    @endforeach
</ul>

<script>
    function toggleinput(input_serie){
        let input_id = "#input-serie-" + input_serie;
        let serie_id = "#serie-nome-" + input_serie;
        if($(input_id).attr('hidden')){
            $(input_id).removeAttr('hidden');
            $(serie_id).attr('hidden',true);
        }
        else{
            $(input_id).attr('hidden',true);
            $(serie_id).removeAttr('hidden');
        }       
    }

    function alterSerie(input_id){
        let formData = new FormData();
        let nome = $('#name-input').val();
        id_serie = "#serie-nome-" + input_id;
        const token = $("input[name='_token']").val();
        formData.append('_token', token);
        formData.append('nome', nome);
        const url = "series/" + input_id + "/alter";
        toggleinput(input_id);
        fetch(url, {
            body: formData,
            method: 'POST'
        })
        console.log('serie-nome-' + input_id);
        $('#serie-nome-' + input_id).html(nome);
    }
</script>
@endsection