<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidocomida extends Model
{
	public $timestamps= false;
	
    protected $table = 'pedidoscomidas';

    protected $fillable = ['hora'];

public function comida(){
    	return $this->hasMany('App\comida');
    }
public function pedidos(){
    	return $this->hasMany('App\pedido');
    }
}
