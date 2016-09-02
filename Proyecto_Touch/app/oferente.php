<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferente extends Model
{
    //
    protected $table = 'oferente';

    protected $fillable = ['razon_social', 'contraseña', 'rol'];

    public function mesas(){
    	return this->hasMany('App\mesa');
    }
}
