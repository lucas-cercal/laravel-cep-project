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

    public function deletar($cep){
        $cepD = Endereco::where('cep',$cep)->first();
        $cepD->delete();

        return redirect('/') -> withSucesso('Endereço removido com sucesso!');
    }

    public function buscar(Request $request){

        $cep = $request -> input ('cep');
        $cepFormatado = preg_replace("/[^0-9]/", "", $cep); 

        if(strlen($cepFormatado) > 8 || strlen($cepFormatado) < 8){
            return redirect('/adicionar') -> withErro('Preencha o CEP válido com apenas 8 dígitos.');
        }

        if($cepFormatado == '' || !is_numeric($cepFormatado)){
            return redirect('/adicionar') -> withErro('Por favor, insira um CEP válido!');
        }

        $response = Http::get("viacep.com.br/ws/$cepFormatado/json/") -> json();

        if(is_array($response) && array_key_exists("erro", $response)){
            return redirect('/adicionar') -> withErro('CEP não encontrado!');
        }
        
        return view('adicionar') -> with([
            'cep' => $cepFormatado,
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'localidade' => $response['localidade'],
            'estado' => $response['uf'],
        ]);
    }

    public function salvar(SalvarRequest $request){

        $cep = $request -> input ('cep');
        $cepFormatado = preg_replace("/[^0-9]/", "", $cep); 

        $endereco = Endereco::where('cep', $cepFormatado) -> first();
        
        if(!$endereco){
            $endereco = Endereco::create([
                'cep' => $cepFormatado,
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
