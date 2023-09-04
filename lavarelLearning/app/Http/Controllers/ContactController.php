<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $nome = "O Pai";
        $idade = 30;
      
        $arr = [1, 2, 3, 4, 5];
          $nomes = ["Bea", "João", "None", "Lusca"];
      
        return view('welcome', 
              [
              'nome' => $nome, 
              'idade' => $idade, 
            'profissao' => 'Garoto de Programa',
              'arr' => $arr,
              'nomes' => $nomes
        ]);

    }

    public function create() {
        return view('events.create');
    }
}
