<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function exibeFormularioPesquisa()
    {
        return view('pesquisar');
    }
}
