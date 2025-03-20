<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('Layout/login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min: 8', 
        ], [
            'password.min' => 'Esse campo tem que ter no mínimo :min caracteres.',  

        ]);
        $credentials = $request ->only('email','password');
        $authenticated = Auth::attempt($credentials);

        if (!$authenticated){
            return redirect()->route('login.index')->withErrors(['error' => 'Email ou senha invalidos.']);
        }
        return redirect()->route('login.store')->with('success','Você esté logado.');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.store');
    }
    
}



