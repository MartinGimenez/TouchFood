<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pedidocomidabebidapostre;
use App\pedido;
use App\pedidocomida;
use App\pedidobebida;
use App\pedidopostre;
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

        $name =Auth::user()->name;
        $pedido = pedido::where('numero_mesa',$name)->where('estado','impago')->first();
        $id_pedido = $pedido->id_pedido;


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

        return view('app.menu.pedidos.index')->with('pedidoscomidas',$pedidoscomidas)->with('pedidosbebidas',$pedidosbebidas)->with('pedidospostres',$pedidospostres);
    }



    public function deletec(Request $request)
    {   
        pedidocomida::where('id_plato', $request->id_plato)->delete();
        return redirect ('pedido-listado');

        
    }


     public function deleteb(Request $request)
    {   
        pedidobebida::where('id_bebida', $request->id_bebida)->delete();
        return redirect ('pedido-listado');

        
    }


     public function deletep(Request $request)
    {   
        pedidopostre::where('id_postre', $request->id_postre)->delete();
        return redirect ('pedido-listado');

        
    }

    
    public function destroy($id)
    {   
        pedido::where('id_pedido', '=', $id)->delete();
        return view('admin.pedidos.index');
    }




     public function show()
    {   
        $pedidos = pedido::all();
        return view('admin.pedidos.index')->with('pedido',$pedidos);

        
    }

     public function listadodetalle(Request $request)
    {   
         $pedidoscomidas = DB::table('pedidoscomidas')
            ->join('comidas', 'pedidoscomidas.id_plato', '=', 'comidas.id_plato')
            ->join('pedidos', 'pedidoscomidas.id_pedidoc', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $request->id_pedido )
            ->select('comidas.nombre','pedidoscomidas.horac')
            ->get();

        $pedidosbebidas = DB::table('pedidosbebidas')
            ->join('bebidas', 'pedidosbebidas.id_bebida', '=', 'bebidas.id_bebida')
            ->join('pedidos', 'pedidosbebidas.id_pedidob', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $request->id_pedido )
            ->select('bebidas.nombre','pedidosbebidas.horab')
            ->get();   

        $pedidospostres = DB::table('pedidospostres')
            ->join('postres', 'pedidospostres.id_postre', '=', 'postres.id_postre')
            ->join('pedidos', 'pedidospostres.id_pedidop', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $request->id_pedido )
            ->select('postres.nombre','pedidospostres.horap')
            ->get();    
        return view('admin.pedidos.pedidosdetalle')->with('pedidoscomidas',$pedidoscomidas)->with('pedidosbebidas',$pedidosbebidas)->with('pedidospostres',$pedidospostres);

        
    }


}
