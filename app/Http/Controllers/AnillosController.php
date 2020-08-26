<?php

namespace App\Http\Controllers;

use App\Anillo;
use App\Contrato;
use App\Cliente;
use App\Pago;
use App\Pedido;
use Illuminate\Http\Request;

class AnillosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anillos = Anillo::paginate(10);
        return view('anillos.index', compact('anillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function creating($id)
    {
        return view('anillos.create', compact('id'));
    }

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
        $anillo = Anillo::create($request->all());
        //return $anillo;
        $contrato = Contrato::findOrFail($anillo->contrato_id);
        $id = $contrato->id;
        $cliente = Cliente::findOrFail($contrato->cliente_id);
        $pedidos = Pedido::all()
            ->where('contrato_id', $id);
        $anillos = Anillo::all()
            ->where('contrato_id', $id);
        $pagos = Pago::all()
            ->where('contrato_id', $id);
        $total_p = Pedido::all()
            ->where('contrato_id', $id)
            ->sum('cost');
        $total_a = Anillo::all()
            ->where('contrato_id', $id)
            ->sum('cost');
        $total = $total_a + $total_p;
        return view('/contratos.show', compact('contrato', 'pedidos', 'anillos', 'pagos' , 'total' , 'cliente'));
       // return view('/anillos.show', compact('anillo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anillo = Anillo::findOrFail($id);
        return view('/anillos.show', compact('anillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anillo = Anillo::findOrFail($id);
        return view('/anillos.edit', compact('anillo'));
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
        $anillo = Anillo::findOrFail($id);
        $anillo->update($request->all());
        return view('/anillos.show', compact('anillo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anillo::destroy($id);
        return redirect('/anillos');
    }
}
