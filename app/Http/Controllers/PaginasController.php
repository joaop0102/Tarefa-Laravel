<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view('index');
    }

    public function quemSomos(){
        return view('quemSomos');
    }

    public function noticias(){
        return view('noticias');
    }

    public function contato(){
        return view('contato');
    }

}
