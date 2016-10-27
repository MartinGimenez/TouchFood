<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pedidocomidabebidapostre;
use App\pedido;
use Auth;
use DB;


class PedidosListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $numero_mesa =Auth::user()->numero_mesa;
        $pedido = pedido::where('numero_mesa',$numero_mesa)->where('estado','impago')->first();
        $id_pedido = $pedido->id_pedido;


        $pedidoscomidas = DB::table('pedidoscomidas')
            ->join('comidas', 'pedidoscomidas.id_plato', '=', 'comidas.id_plato')
            ->join('pedidos', 'pedidoscomidas.id_pedidoc', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('comidas.nombre','comidas.precio','comidas.tiempo_coccion')
            ->get();

        $pedidosbebidas = DB::table('pedidosbebidas')
            ->join('bebidas', 'pedidosbebidas.id_bebida', '=', 'bebidas.id_bebida')
            ->join('pedidos', 'pedidosbebidas.id_pedidob', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('bebidas.nombre','bebidas.precio','bebidas.tiempo_servicio')
            ->get();   

        $pedidospostres = DB::table('pedidospostres')
            ->join('postres', 'pedidospostres.id_postre', '=', 'postres.id_postre')
            ->join('pedidos', 'pedidospostres.id_pedidop', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('postres.nombre','postres.precio','postres.tiempo_preparacion')
            ->get();    

        return view('app.menu.pedidos.index')->with('pedidoscomidas',$pedidoscomidas)->with('pedidosbebidas',$pedidosbebidas)->with('pedidospostres',$pedidospostres);
    }


}
