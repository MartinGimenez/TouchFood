<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido-postre extends Model
{
    protected $table = 'pedidos-postres';

    protected $fillable = ['hora'];

public function postre(){
    	return this->hasMany('App\postre');
    }
public function pedidos(){
    	return this->hasMany('App\pedido');
    }    
}
