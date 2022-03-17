<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11', //São Paulo(SP)
                'telefone'=>'0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza(CE)
                'telefone'=>'0000-0000'
            ],
            2 => [
                'nome' => 'fornecedor3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de Fora(MG)
                'telefone'=>'0000-0000'
            ]
        ];

        //If ternario = condicao ? se verdade : se falso;
        //$msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';
        //echo $msg;

        //$fornecedores = []; condicao de falso do @forelse
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
