<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Input;

class ClienteController extends Controller
{
    public function exibeFormularioCadastro()
    {
        return view('cadastrar');
    }

    public function exibeFormularioPesquisa()
    {
        return view('pesquisar');
    }

    public function salvaCliente(Request $request){

        $costumer = new Cliente();

        $costumer->nome = $request->nome;
        $costumer->cnpj = $request->cnpj;
        $costumer->email = $request->email;
        $costumer->telefone = $request->telefone;
        $costumer->save();

        return redirect('/cadastrar')->with('msg', 'cliente cadastrado');
    }

    public function retornaResultadosPesquisa()
    {
        $busca = Input::get('busca');
        if($busca != ""){
            $cliente = Cliente::where('nome', 'LIKE', '%' . $busca . '%')
                                    ->orWhere('email', 'LIKE', '%' . $busca . '%')
                                    ->get();
            if(count($cliente) > 0)
                return view('pesquisar')->withDetails($cliente)->withQuery($busca);
        }
        return view('pesquisar')->withMessage("Dados não existem");
    }
}
