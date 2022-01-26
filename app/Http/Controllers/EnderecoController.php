<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller{
    public function index(){
        return view('busca');
    }

    public function buscar(Request $request){
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/") -> json();
        
        return view('adicionar') -> with([
            'cep' => $request -> input('cep'),
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'localidade' => $response['localidade'],
            'estado' => $response['uf'],
        ]);
    }

}
