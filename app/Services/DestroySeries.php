<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Temporada;
use App\Models\Episodio;
use App\Serie;
use Illuminate\Support\Facades\DB;

class DestroySeries{
    public function destroy(Request $request):string{
        DB::begintransaction();
        $series = Serie::find($request->id);
        $nome_serie = $series->nome;
        $series->temporadas->each(function(Temporada $temporada){
            $temporada->episodios->each(function(Episodio $episodio){
                $episodio->delete();
            }
        );
        $temporada->delete();
    });
        $series->delete();
        DB::commit();

        return $nome_serie;
    }
}