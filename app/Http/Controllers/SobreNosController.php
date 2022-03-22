<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class SobreNosController extends Controller
{
   // public function __construct()
    //{
     //   $this->middleware('Log.Acesso');
    //}
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
