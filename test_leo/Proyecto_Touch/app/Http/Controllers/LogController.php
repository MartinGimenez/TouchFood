<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Http\Requests;
use Auth;
use Redirect;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getLogin(){

        return view("auth.login");
    }
    public function postLogin(LoginRequest $request){

        ///dd($request['password']);
        
        $pasw = Hash::make('admin1905');
        //dd($pasw);
        dd(Auth::attempt(array(
                                 'user' => 'laEstancia',
                                 'password' => $pasw,
                                )));
     /*   if(Auth::attempt( ['usuario'=> $request['usuario'],'password'=>$request['password']])){
            
            return Redirect::to('Bienvenida');
        }
*/
          //  if($request['usuario']=='laEstancia'){
            
         //    return Redirect::to('Bienvenida');
        //}

        return Redirect::to('app.menu.categorias');
    }


    public function getLogout(){

        Auth::logout;
        return Redirect::to('app.mesas.mesas');
    }
}
