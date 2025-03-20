<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    
    public function index(){
        $carros = carro::all();
        return view('carros/carros', ['carros'=>$carros]);
    }

    public function create(){
        return view('carros.create');
    }


}
