<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){

        //var_dump($_POST); //var_dump($_GET)
        return view('site.contato', ['titulo' => 'Contato']);
    }
}
