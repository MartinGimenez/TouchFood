<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pedido;
use App\mesa;
use Auth;
use DB;


class PagoController extends Controller
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
        $suma=0;
        $sumatarjeta=0;


        $pedidoscomidas = DB::table('pedidoscomidas')
            ->join('comidas', 'pedidoscomidas.id_plato', '=', 'comidas.id_plato')
            ->join('pedidos', 'pedidoscomidas.id_pedidoc', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('comidas.nombre','comidas.precio')
            ->get();

        $pedidosbebidas = DB::table('pedidosbebidas')
            ->join('bebidas', 'pedidosbebidas.id_bebida', '=', 'bebidas.id_bebida')
            ->join('pedidos', 'pedidosbebidas.id_pedidob', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('bebidas.nombre','bebidas.precio')
            ->get();   

        $pedidospostres = DB::table('pedidospostres')
            ->join('postres', 'pedidospostres.id_postre', '=', 'postres.id_postre')
            ->join('pedidos', 'pedidospostres.id_pedidop', '=', 'pedidos.id_pedido')
            ->where('pedidos.id_pedido' , '=', $id_pedido )
            ->select('postres.nombre','postres.precio')
            ->get();    

       foreach($pedidoscomidas as $pedidocomida){

            $suma = ($suma + $pedidocomida->precio);

       }


       foreach($pedidosbebidas as $pedidobebida){

            $suma = ($suma + $pedidobebida->precio);

       }


       foreach($pedidospostres as $pedidopostre){

            $suma = ($suma + $pedidopostre->precio);

       }
       $sumatarjeta=$suma*100;

        return view('app.menu.pago.index')->with('pedidoscomidas',$pedidoscomidas)->with('pedidosbebidas',$pedidosbebidas)->with('pedidospostres',$pedidospostres)->with('suma',$suma)->with('sumatarjeta',$sumatarjeta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $token = $request->stripeToken;
        \Auth::user()->subscription('semanal')->create($token);



        $name =Auth::user()->name;

        pedido::where('numero_mesa', $name)
          ->where('estado', 'impago')
          ->update(['estado' => 'pago']);

        mesa::where('name', $name)
          ->update(['estado' => 'Desocupada']);


        return redirect('comenzar');
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



    public function actualizarpedido(){

        $name =Auth::user()->name;

        pedido::where('numero_mesa', $name)
          ->where('estado', 'impago')
          ->update(['estado' => 'pago']);

        mesa::where('name', $name)
          ->update(['estado' => 'desocupada']);


        return redirect('comenzar');
    }
}
