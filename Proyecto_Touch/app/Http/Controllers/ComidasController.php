<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\comida;
use DB;
use Laracasts\Flash\Flash;
class ComidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $categorias_comidas = DB::table('comidas')->select('categoria')->distinct()->get();
        return view('admin.comidas.index')->with('categorias_comidas',$categorias_comidas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view ('admin.comidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *epecified resource.
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
        $comida = Comida::find($id);
        return view('admin.comidas.edit')->with('comida', $comida);
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
        $comida = Comida::find($id);
        $comida->nombre = $request->nombre;
        $comida->ingredientes = $request->ingredientes;
        $comida->categoria = $request->categoria;
        $comida->precio = $request->precio;
        $comida->celiaco = $request->celiaco;
        $comida->tiempo_coccion = $request->tiempo_coccion;
        $comida->save();
        return redirect()->route('admin.comidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comida = Comida::find($id);
        $comida->delete();
        return redirect()->route('admin.comidas.index');
    }

    public function store(Request $request)
    {
        $comida = new Comida($request->all());
        $comida->nombre = $request->nombre;
        $comida->ingredientes = $request->ingredientes;
        $comida->categoria = $request->categoria;
        $comida->precio = $request->precio;
        $comida->celiaco = $request->celiaco;
        $comida->tiempo_coccion = $request->tiempo_coccion;
        $comida->save();
        return redirect()->route('admin.comidas.index');

    }

    public function comidas_por_categoria($categoria)
    {
        $comidas = comida::where('categoria',$categoria)->get();
        $tipo="comidas";
        return view('app.menu.comidas.index')->with('comidas',$comidas)->with('categoria',$categoria)->with('tipo',$tipo);        
    }


    public function comidas_por_categoria_admin(Request $request)
    {
        $comidas = comida::where('categoria',$request->categoria)->get();
        return view('admin.comidas.listadoc')->with('comidas',$comidas);       
    }


}