<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function exibeFormularioCadastro()
    {
        return view('cadastrar');
    }
}
