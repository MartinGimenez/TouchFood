<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postre extends Model
{
    //
    protected $table = 'postres';

    protected $fillable = ['nombre', 'ingrediente', 'categoria','precio','celiaco','tiempo_preparacion'];

    public function pedidosPostres(){

    	return $this->belongsTo('App\pedido-postre');
    }
}
