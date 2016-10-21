<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidobebida extends Model
{
	public $timestamps = false;
	
    protected $table = 'pedidosbebidas';

    protected $fillable = ['hora'];

public function bebida(){
    	return $this->hasMany('App\bebida');
    }
public function pedidos(){
    	return $this->hasMany('App\pedido');
    }
}

