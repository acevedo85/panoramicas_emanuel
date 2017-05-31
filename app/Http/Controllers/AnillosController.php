<?php

namespace App\Http\Controllers;

use App\Anillo;
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
        return view('/anillos.show', compact('anillo'));
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
