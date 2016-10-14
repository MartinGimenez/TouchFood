<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    //
    protected $table = 'mesa';

    protected $fillable = ['capacidad'];

    public function pedidos(){

    	return $this->hasMany('App\pedido');
    }

    public function oferente(){
    	return $this->belongsTo('App\oferente');
    }
}
