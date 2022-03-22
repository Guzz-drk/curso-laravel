<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        //echo '<pre>';
        //print_r($request->all());
        //echo '</pre>';
        //echo $request->input('nome');
        //echo '<br>';
        //echo $request->input('email');
        //var_dump($_POST); //var_dump($_GET)

        //Metodo para tratamento individual dos atributos
        /*$contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes());
        $contato->save();
        */
        //$contato = new SiteContato;
        //Metodo create persiste os dados e salva no banco
        //$contato->create($request->all());
        //Metodo que rapidamento persiste os atributos no banco
        //$contato->fill($request->all());
        //$contato->save();
        //print_r($contato->getAttributes());
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $regras = [
            //Meio de validação unico = ex: 'nome'=>'unique:site_contatos'
            'nome' => 'required|min:3|max:40|', //nome com no minimo 3 caracteres e no maximo 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            //Tratando mensagem de erro
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres!',
            'nome.max' => 'O campo nome deve ter no maximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido!',
            'email' => 'O campo email deve ser preenchido corretamente!',
            'motivo_contatos_id.required' => 'Preencha corretamente o campo!',
            'mensagem.max' => 'O campo mensagem deve ter no maximo 2000 caracteres!'
        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
