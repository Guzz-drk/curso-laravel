<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table= 'produtos';
    protected $fillable =['nome', 'descricao', 'peso', 'unidade_id'];

    public function produtoDetalhe(){
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }
}
