<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\pedido;
use App\mesa;
use Auth;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Pedidos-Listado';
        $pedidos = pedido::all();
        return view('admin.pedidos.index')->with('pedidos',$pedidos)->with('titulo',$titulo);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pedido, $name)
    {
        $pedido = pedido::where('numero_mesa',$name)->first();
        //$id_pedido = $pedido->id_pedido;


        $pedidoscomidas = DB::table('pedidoscomidas')
            ->join('comidas', 'pedidoscomidas.id_plato', '=', 'comidas.id_plato')
            ->join('pedidos', 'pedidoscomidas.id_pedidoc', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('comidas.nombre','comidas.precio','comidas.tiempo_coccion','comidas.id_plato')
            ->get();

        $pedidosbebidas = DB::table('pedidosbebidas')
            ->join('bebidas', 'pedidosbebidas.id_bebida', '=', 'bebidas.id_bebida')
            ->join('pedidos', 'pedidosbebidas.id_pedidob', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('bebidas.nombre','bebidas.precio','bebidas.tiempo_servicio','bebidas.id_bebida')
            ->get();   

        $pedidospostres = DB::table('pedidospostres')
            ->join('postres', 'pedidospostres.id_postre', '=', 'postres.id_postre')
            ->join('pedidos', 'pedidospostres.id_pedidop', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('postres.nombre','postres.precio','postres.tiempo_preparacion','postres.id_postre')
            ->get();    

        return view('admin.pedidos.index')->with('pedidoscomidas',$pedidoscomidas)->with('pedidosbebidas',$pedidosbebidas)->with('pedidospostres',$pedidospostres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = pedido::find($id_pedido);
        return view('admin.pedidos.edit')->with('pedido', $pedido);    }

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
    public function destroy($id_pedido)
    {
        $pedido = pedido::where('id_pedido', '=', $id_pedido);
        $pedido->delete();
        
        return redirect()->route('admin.pedidos.index');
    }


    public function agregar_pedido(){
        
        $name =Auth::user()->name;

        mesa::where('name', $name)
          ->update(['estado' => 'ocupada']);

        $pedido = new pedido;
        $pedido->numero_mesa = Auth::user()->name;
        $pedido->estado = 'impago';
        if($pedido->save()){
            return redirect ('bienvenida');
        }
    }
}
