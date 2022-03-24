<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos()
    {
        //return $this->belongsToMany('App\Produto', 'pedido_produtos');
        return $this->belongsToMany('App\Item', 'pedido_produtos', 'pedido_id', 'produto_id')->withPivot('created_at', 'id');
    }
}
