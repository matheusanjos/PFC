<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class IndexController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required|string|min:6'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'senha' => $request->get('senha')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/home');
        } else {
            return back()->with('error', 'Email ou senha incorretos!');
        }
    }

}
