<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller{
    public function index(){
        return view('busca');
    }

    public function buscar(Request $request){
        $cep = $request->input('cep');
        dd($cep);
    }
}
