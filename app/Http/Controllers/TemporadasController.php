<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;


class TemporadasController extends Controller
{
    public function index(int $id){
        $temporadas = Serie::find($id)->temporadas;
        $nome = Serie::find($id)->nome;
        return view('temporadas.Temporadas', compact('temporadas'));
    }
}
