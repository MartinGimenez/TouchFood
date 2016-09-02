<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    //
    protected $table = 'pedidos';

    protected $fillable = ['numero_mesa', 'id_plato', 'id_postre','id_bebida','hora'];

    public function mesa(){
    	return this->belongsTo('App\mesa');
    }

    public function bebida(){
    	return this->belognsTo('App\bebida');
    }
    public function comida(){
    	return this->belognsTo('App\comida');
    }
    public function postre(){
    	return this->belognsTo('App\postre');
    }
}

