<?php 

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use phpDocumentor\Reflection\Types\Null_;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create(){

        return view('series.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|min:2'
        ]);
        $nome = $request->nome;
        $serie = new Serie;
        $serie->nome = $nome;
        if($serie->save())
            return redirect()->route('index')->with('msg',"{$nome} adicionada a sua lista de séries!");
    }

    public function destroy(Request $request){
        Serie::destroy($request->id);
        return redirect()->route('index')->with('msg-delete',"{$request->nome} foi removida da sua lista de séries");
    }

}