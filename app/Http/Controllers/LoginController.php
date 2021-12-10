<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function submit(Request $request){
        if(!Auth::attempt($request->only(['email','password'])) )
            redirect()->back()->withErrors('Erro de autenticação');
    }
}
