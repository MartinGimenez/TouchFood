<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Redirect;
use Validator;
use App\Http\Controllers\Controller;
/*use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;*/
use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /*protected $redirectAfterLogout = "admin/login";
    protected $redirectPath = 'admin/home';*/
    protected $redirectPath = 'admin/home';
    protected $loginPath = '/admin/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = "admin";
        $this->middleware('admin.guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

/*    public function getRegister() {
        return redirect('admin/register');
    }

    public function postRegister() {
        return redirect('admin/admin_home');
    }*/
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //'name' => $data['name'],
            //'capacidad' => $data['capacidad'],
            //'estado' => $data['estado'],
            'password' => bcrypt($data['password']),
        ]);
    }
}