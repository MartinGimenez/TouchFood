<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\postre;
use DB;
use Laracasts\Flash\Flash;

class PostresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
       $categorias_postres = DB::table('postres')->select('categoria')->distinct()->get();
        return view('admin.postres.index')->with('categorias_postres',$categorias_postres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view ('admin.postres.create');
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
        $postre = Postre::find($id);
        return view('admin.postres.edit')->with('postre', $postre);
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
        $postre = Postre::find($id);
        $postre->nombre = $request->nombre;
        $postre->ingredientes = $request->ingredientes;
        $postre->categoria = $request->categoria;
        $postre->precio = $request->precio;
        $postre->celiaco = $request->celiaco;
        $postre->tiempo_preparacion = $request->tiempo_preparacion;
        $postre->save();
        return redirect()->route('admin.postres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postre = Postre::find($id);
        $postre->delete();
        return redirect()->route('admin.postres.index');
    }

    public function store(Request $request)
    {
        $postre = new Postre($request->all());
        $postre->nombre = $request->nombre;
        $postre->ingredientes = $request->ingredientes;
        $postre->categoria = $request->categoria;
        $postre->precio = $request->precio;
        $postre->celiaco = $request->celiaco;
        $postre->tiempo_preparacion = $request->tiempo_preparacion;
        $postre->save();
        return redirect()->route('admin.postres.index');
    }
    public function postres_por_categoria($categoria)
    {
        $comidas = postre::where('categoria',$categoria)->get();
        $tipo="postres";
        return view('app.menu.comidas.index')->with('comidas',$comidas)->with('categoria',$categoria)->with('tipo',$tipo);
    }
    public function postres_por_categoria_admin(Request $request)
    {
        $postres = postre::where('categoria',$request->categoria)->get();
        return view('admin.postres.listadop')->with('postres',$postres);       
    }
}
