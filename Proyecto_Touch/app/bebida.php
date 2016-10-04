<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    //
    protected $table = 'bebidas';

    protected $fillable = ['nombre', 'ingrediente', 'categoria','precio','celiaco','tiempo_servicio'];

    public function pedidosBebida(){

    	return $this->belongsTo('App\pedido-bebida');
    }
}
