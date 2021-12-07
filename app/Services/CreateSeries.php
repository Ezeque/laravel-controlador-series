<?php 

namespace App\Services;
use App\Serie;
use Illuminate\Support\Facades\DB;

class CreateSeries{

    public function create(string $nome_serie, int $qtd_temporadas, int $qtd_episodios):Serie{
        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nome_serie]);
        for ($i=1; $i <= $qtd_temporadas; $i++) { 
                $temporada=$serie->temporadas()->create(['numero' => $i]);
                for ($j=1; $j <= $qtd_episodios ; $j++) { 
                    $episodio=$temporada->episodios()->create(['numero' => $j]);
                }
    
        }
        DB::commit();
        return $serie;
    }

}