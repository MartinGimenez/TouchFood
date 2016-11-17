<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    public $timestamps = false;

    protected $table = 'pedidos';

    protected $fillable = ['id_pedido', 'numero_mesa', 'id_plato', 'id_postre','id_bebida','hora'];

    public function mesa(){
    	return $this->belongsTo('App\mesa');
    }

    public function pedidosComidas(){
        return $this->belongsTo('App\pedido-comida');
    }

    public function pedidosBebidas(){
        return $this->belongsTo('App\pedido-bebida');
    }

    public function pedidosPostres(){
        return $this->belongsTo('App\pedido-postre');
    }


}

