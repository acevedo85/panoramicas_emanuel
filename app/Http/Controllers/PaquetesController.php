<?php

namespace App\Http\Controllers;

use App\Paquete;
use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::paginate(10);
        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paquetes.create');
    }

    public function creating($id)
    {
        return view('paquetes.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paquete = Paquete::create($request->all());
        return view('/paquetes.show', compact('paquete'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('/paquetes.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('/paquetes.edit', compact('paquete'));
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
        $paquete = Paquete::findOrFail($id);
        $paquete->update($request->all());
        return view('/paquete.show', compact('paquete'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paquete::destroy($id);
        return redirect('/paquetes');
    }
}
