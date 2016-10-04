<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido-comida extends Model
{
    protected $table = 'pedidos-comidas';

    protected $fillable = ['hora'];

public function comida(){
    	return $this->hasMany('App\comida');
    }
public function pedidos(){
    	return $this->hasMany('App\pedido');
    }
}
