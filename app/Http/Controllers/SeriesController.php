<?php 

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = ["How i met Your Mother",
        "Loki",
        "Friends",
        "Atypical"];
        return view('series.index', compact('series'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nome = $request->get('nome');
        var_dump($nome);
        $serie = new Serie();
    }

}