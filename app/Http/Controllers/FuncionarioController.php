<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

use Illuminate\Support\Facades\Input;

class FuncionarioController extends Controller
{

    protected function validator(array $data)
    {
        
    }

    public function index(){
        return view('cadastrar-funcionario');
    }
    
    public function cadastraFuncionario(Request $request){
        $this->validate($request, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'senha' => 'required|string|min:6|confirmed',
        ]);
        $funcionario = new User();

        $funcionario->nome = $request->nome;
        $funcionario->email = $request->email;
        $funcionario->senha = bcrypt($request->senha);
        $funcionario->save();

        return redirect('/cadastrar/funcionario')->with('msg', 'cliente cadastrado');
    }
}
