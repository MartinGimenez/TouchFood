<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, BillableContract 
{
    use Authenticatable, CanResetPassword, Billable;
    protected $dates = ['trial_ends_at', 'subscription_ends_at'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mesas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'capacidad', 'estado'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function pedidos(){
        return $this->hasMany('App\pedido');
    }

    public function oferente(){
        return $this->belongsTo('App\oferente');
    }
}
