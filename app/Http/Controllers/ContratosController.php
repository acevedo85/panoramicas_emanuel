<?php

namespace App\Http\Controllers;

use App\Anillo;
use App\Cliente;
use App\Contrato;
use App\Pago;
use App\Pedido;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::paginate(10);
        //return $contratos;
        return view('contratos.index', compact('contratos'));
    }

    public function create_test($id)
    {
        //return $id;
        return view('contratos.create', compact('id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrato = Contrato::create($request->all());

        return view('/contratos.show', compact('contrato'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        $contrato = Contrato::findOrFail($id);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato = Contrato::findOrFail($id);
        return view('/contratos.edit', compact('contrato'));
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
        $contrato = Contrato::findOrFail($id);
        $contrato->update($request->all());
        return view('/contratos.show', compact('contrato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contrato::destroy($id);
        return redirect('/contratos');
    }
}
