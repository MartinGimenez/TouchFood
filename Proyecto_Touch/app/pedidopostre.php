<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidopostre extends Model
{
    protected $table = 'pedidospostres';

    protected $fillable = ['hora'];

public function postre(){
    	return $this->hasMany('App\postre');
    }
public function pedidos(){
    	return $this->hasMany('App\pedido');
    }    
}
