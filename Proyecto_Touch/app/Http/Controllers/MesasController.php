<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mesa;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Mesas-Listado';
        $mesas = mesa::all();
        return view('admin.mesas.index')->with('mesas',$mesas)->with('titulo',$titulo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.mesas.create');
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
        $mesas = Mesa::all();
        return view('admin.index')->with('mesas',$mesas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = Mesa::find($id);
        return view('admin.mesas.edit')->with('mesa', $mesa);
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
    
        $mesa = Mesa::find($id);
        $mesa->name = $request->name;
        $mesa->capacidad = $request->capacidad;
        $mesa->estado = $request->estado;
        $mesa->save();

        return redirect()->route('admin.mesas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesa = Mesa::where('id', '=', $id);
        $mesa->delete();
        
        return redirect()->route('admin.mesas.index');
    }
}
