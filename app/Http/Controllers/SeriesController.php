<?php 

namespace App\Http\Controllers;


use App\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\FormSeriesRequest;
use App\Models\Episodio;
use App\Services\CreateSeries;
use App\Services\DestroySeries;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create(){
        if(!Auth::Check()){
            redirect()->route('index');
        }
        return view('series.create');
    }

    public function store(FormSeriesRequest $request, CreateSeries $criador){
        $series = $criador->create($request->nome, $request->qtd_temporadas, $request->qtd_episodios, $request->descricao);
        return redirect()->route('index')->with('msg',"{$series->nome} adicionada a sua lista de séries!");
        
    }

    public function destroy(Request $request, DestroySeries $destruidor){
    $series = $destruidor->destroy($request);   
    return redirect()->route('index')->with('msg-delete',"{$series} foi removida da sua lista de séries");

    }

    public function alter(Request $request){
        $new_name = $request->nome;
        $series = Serie::find($request->id);
        $series->nome = $new_name;
        $series->save();  
        }
}