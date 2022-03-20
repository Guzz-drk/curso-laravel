<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    //renomeia a tabela, para o eloquent achar o caminho
    protected $table = 'fornecedores';
    //para utilizar o metodo do tinker create, precisa adicionar os campos no array abaixo
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
