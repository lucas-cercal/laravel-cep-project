<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;

class EnderecoController extends Controller{
    public function index(){
        $enderecos = Endereco::all();
        return view('listagem') -> with([
            'enderecos' => $enderecos,
        ]);
    }

    public function adicionar(){
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

    public function salvar(SalvarRequest $request){

        $endereco = Endereco::where('cep', $request->input('cep')) -> first();

        if(!$endereco){
            $endereco = Endereco::create([
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'bairro' => $request->input('bairro'),
                'localidade' => $request->input('localidade'),
                'estado' => $request->input('estado'),
                'numero' => $request->input('numero'),
            ]);  

            return redirect('/') -> withSucesso('Endereço salvo com sucesso!');
        }

        return redirect('/') -> withErro('O CEP inserido já está cadastrado!');; 
    } 
 
}
