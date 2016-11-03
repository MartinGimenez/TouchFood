<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\bebida;
use DB;
use Laracasts\Flash\Flash;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
       $categorias_bebidas = DB::table('bebidas')->select('categoria')->distinct()->get();
        return view('admin.bebidas.index')->with('categorias_bebidas',$categorias_bebidas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view ('admin.bebidas.create');
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
        $bebida = Bebida::find($id);
        return view('admin.bebidas.edit')->with('bebida', $bebida);
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
        $bebida = Bebida::find($id);
        $bebida->nombre = $request->nombre;
        $bebida->ingredientes = $request->ingredientes;
        $bebida->categoria = $request->categoria;
        $bebida->precio = $request->precio;
        $bebida->celiaco = $request->celiaco;
        $bebida->tiempo_servicio = $request->tiempo_servicio;
        $bebida->save();
        //Flash::success("Se ha realizado la modificación de forma exitosa");
        return redirect()->route('admin.bebidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bebida = Bebida::find($id);
        $bebida->delete();

        //Flash::success("Se ha eliminado bebida de forma exitosa");
        return redirect()->route('admin.bebidas.index');
    }

    public function store(Request $request)
    {
        $bebida = new Bebida($request->all());
        $bebida->nombre = $request->nombre;
        $bebida->ingredientes = $request->ingredientes;
        $bebida->categoria = $request->categoria;
        $bebida->precio = $request->precio;
        $bebida->celiaco = $request->celiaco;
        $bebida->tiempo_servicio = $request->tiempo_servicio;
        $bebida->save();
        //Flash::success("Se agrego bebida de forma exitosa");

        return redirect()->route('admin.bebidas.index');

    }

    public function bebidas_por_categoria($categoria)
    {
        $comidas = bebida::where('categoria',$categoria)->get();
        $tipo= "bebidas";
        return view('app.menu.comidas.index')->with('comidas',$comidas)->with('categoria',$categoria)->with('tipo',$tipo);     
    }
    public function bebidas_por_categoria_admin(Request $request)
    {
        $bebidas = bebida::where('categoria',$request->categoria)->get();
        return view('admin.bebidas.listadob')->with('bebidas',$bebidas);       
    }
}
