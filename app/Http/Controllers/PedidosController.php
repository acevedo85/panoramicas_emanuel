<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Paquete;
use App\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::paginate(10);
        return view('pedidos.index', compact('pedidos'));
    }

    public function creating($id)
    {
        $paquetes = Paquete::all();
        return view('pedidos.create', compact('id', 'paquetes'));
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
        //$test = $request->all();
        //return $test;
        $pedido = Pedido::create($request->all());
        $id = $pedido->contrato_id;
        $contrato = Contrato::findOrFail($id);
        return view('/contratos.show', compact('id', 'contrato'));
        //return view('/pedidos.show', compact('pedido'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('/pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('/pedidos.edit', compact('pedido'));
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
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return view('/pedidos.show', compact('pedido'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pedido::destroy($id);
        return redirect('/pedidos');
    }
}
