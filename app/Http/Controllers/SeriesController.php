<?php 

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\FormSeriesRequest;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create(){

        return view('series.create');
    }

    public function store(FormSeriesRequest $request){
        $serie = Serie::create(['nome' => $request->nome]);
        for($i = 1; $i<= $request->qtd_temporadas; $i++){
            $serie->temporadas()->create(['numero' => $i]);
        }
        if($serie->save())
            return redirect()->route('index')->with('msg',"{$serie->nome} adicionada a sua lista de séries!");
    }

    public function destroy(Request $request){
        Serie::destroy($request->id);
        return redirect()->route('index')->with('msg-delete',"{$request->nome} foi removida da sua lista de séries");
    }

}