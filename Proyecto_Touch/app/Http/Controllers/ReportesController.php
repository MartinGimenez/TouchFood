<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $reportes_recaudacion_comidas = DB::table('pedidos')
            ->join('pedidoscomidas', 'pedidoscomidas.id_pedidoc', '=', 'pedidos.id_pedido')
            ->join('comidas', 'pedidoscomidas.id_plato', '=', 'comidas.id_plato')
            ->where('pedidos.numero_mesa' , '=', "Mesa 2")
            ->select('comidas.precio')
            ->get();



        $reportes_recaudacion_bebidas = DB::table('pedidos')
            ->join('pedidosbebidas', 'pedidosbebidas.id_pedidob', '=', 'pedidos.id_pedido')
            ->join('bebidas', 'pedidosbebidas.id_bebida', '=', 'bebidas.id_bebida')
            ->where('pedidos.numero_mesa' , '=', "Mesa 2")
            ->select('bebidas.precio')
            ->get();



        $reportes_recaudacion_postres = DB::table('pedidos')
            ->join('pedidospostres', 'pedidospostres.id_pedidop', '=', 'pedidos.id_pedido')
            ->join('postres', 'pedidospostres.id_postre', '=', 'postres.id_postre')
            ->where('pedidos.numero_mesa' , '=', "Mesa 2")
            ->select('postres.precio')
            ->get();


        return view ('admin.mesas.reports')->with($reportes_recaudacion_comidas)->with($reportes_recaudacion_bebidas)->with($reportes_recaudacion_postres);

       
    }
    public function reportes()
    {
        $ocupadas = DB::table('mesas')->where('estado','=','ocupada')->count();    
        $disponibles = DB::table('mesas')->where('estado','=','desocupada')->count();

        $pago = DB::table('pedidos')->where('estado','=','pago')->count();
        $impago = DB::table('pedidos')->where('estado','=','impago')->count();

        $comidas = DB::table('pedidoscomidas')->count(); 
        $bebidas = DB::table('pedidosbebidas')->count(); 
        $postres = DB::table('pedidospostres')->count(); 
        
        return view ('admin.home')->with('comidas',$comidas)->with('bebidas',$bebidas)->with('postres',$postres)->with('ocupadas',$ocupadas)->with('disponibles',$disponibles)->with('pago',$pago)->with('impago',$impago); 
    }

    /**
     * Show the form for creating a new resource.
     *
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
}
