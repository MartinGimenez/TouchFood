<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido-bebida extends Model
{
	public $timestamps = false;
	
    protected $table = 'pedidos-bebidas';

    protected $fillable = ['hora'];

public function bebida(){
    	return $this->hasMany('App\bebida');
    }
public function pedidos(){
    	return $this->hasMany('App\pedido');
    }
}

