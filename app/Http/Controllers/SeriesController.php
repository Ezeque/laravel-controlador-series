<?php 

namespace App\Http\Controllers;


use App\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\FormSeriesRequest;
use App\Models\Episodio;
use App\Services\CreateSeries;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create(){

        return view('series.create');
    }

    public function store(FormSeriesRequest $request, CreateSeries $criador){
        $series = $criador->create($request->nome, $request->qtd_temporadas, $request->qtd_episodios);
        return redirect()->route('index')->with('msg',"{$series->nome} adicionada a sua lista de séries!");
        
    }

    public function destroy(Request $request){
        $series = Serie::find($request->id);
        echo "<script>console.log($series)</script>";
        $series->temporadas->each(function(Temporada $temporada){
            $temporada->episodios->each(function(Episodio $episodio){
                $episodio->delete();
            }
        );
        $temporada->delete();
    });
        $series->delete();
    return redirect()->route('index')->with('msg-delete',"{$request->nome} foi removida da sua lista de séries");

    }
}