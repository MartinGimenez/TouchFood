<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    
    protected $table = 'mesas';

    protected $fillable = ['capacidad','estado'];

    public function pedidos(){

    	return $this->hasMany('App\pedido');
    }

    public function oferente(){
    	return $this->belongsTo('App\oferente');
    }
}
