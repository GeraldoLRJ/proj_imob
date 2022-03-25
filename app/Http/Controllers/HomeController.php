<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $nome = "Geraldo";
        $idade = 20;
    
        $vetor = [1,2,3,4,5];
        
        return view('welcome', 
        ['nome' => $nome, 
        'idade' => $idade, 
        'vetor' => $vetor]);
    }

    public function create() {

        return view('homes.create');

    }

    public function casas() {

        return view('homes.homes');

    }

    public function contact() {

        return view('contact');

    }

    
}
