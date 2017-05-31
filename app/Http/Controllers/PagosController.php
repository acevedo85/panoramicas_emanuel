<?php

namespace App\Http\Controllers;

use App\Pago;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function today()
    {
        $dt = Carbon::now('America/Mexico_City')->toDateString();
        $pagos = Pago::all()
            ->where('date_pay', $dt);
        return view('pagos.today', compact('pagos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Pago::paginate(10);
        return view('pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function creating($id)
    {
        return view('pagos.create', compact('id'));
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = Pago::create($request->all());
        return view('/pagos.show', compact('pago'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pago = Pago::findOrFail($id);
        return view('/pagos.show', compact('pago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago = Pago::findOrFail($id);
        return view('/pagos.edit', compact('pago'));
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
        $pago = Pago::findOrFail($id);
        $pago->update($request->all());
        return view('/pagos.show', compact('pago'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pago::destroy($id);
        return redirect('/pagos');
    }
}
