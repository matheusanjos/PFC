<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesquisaController extends Controller
{
    public function index()
    {
        return view('pesquisar');
    }

    public function fazPesquisa()
    {
        $email = $dados->input('email');

        $users = DB::table('users')->where('email')->first();

        return view('pesquisar', ['email' => $email]);
    }
}
