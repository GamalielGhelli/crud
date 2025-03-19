<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carro;

class CarroController extends Controller
{
    
    public function index(){
        $carros = carro::all();
        return view('carros');
    }

    public function create(){
        
    }


}
