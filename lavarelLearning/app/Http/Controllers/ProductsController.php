<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

    }

    public function create() {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }
}
