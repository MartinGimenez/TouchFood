<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    //
    protected $table = 'comidas';
    public $timestamps= false;
    protected $primaryKey = 'id_plato';

    protected $fillable = ['nombre', 'ingrediente', 'categoria','precio','celiaco','tiempo_coccion'];

    public function pedidosComidas(){

    	return $this->belongsTo('App\pedido-comida');
    }
}
