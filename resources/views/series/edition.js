function toggleinput(input_serie){
    input_id = "#input-serie-" + input_serie;
    serie_id = "#serie-nome-" + input_serie;
    if($(input_id).attr('hidden')){
        $(input_id).removeAttr('hidden');
        $(serie_id).attr('hidden',true);
    }
    else{
        $(input_id).attr('hidden',true);
        $(serie_id).removeAttr('hidden');
    }       
}