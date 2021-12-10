<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class TemporadasController extends Controller
{
    public function index(int $id){
        $temporadas = Serie::find($id)->temporadas;
        $nome = Serie::find($id)->nome;
        $series = Serie::find($id);
        return view('temporadas.Temporadas', compact('temporadas'),['series' => $series]);
    }

    public function store(Temporada $temporadas, Request $request){
        
        $temporadas = Temporada::find($request->id);
        $episodios_assistidos = $request->episodios;
        if(!$episodios_assistidos == Null)
            $temporadas->episodios->each(function(Episodio $episodio) use ($episodios_assistidos){
            $episodio->assistido = in_array($episodio->id, $episodios_assistidos);   
        }); 
        else
            $temporadas->episodios->each(function(Episodio $episodio) use ($episodios_assistidos){
            $episodio->assistido = 0; 
        });

        $temporadas->push();
        return redirect()->back();
    }
}