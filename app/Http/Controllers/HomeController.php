<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Gasto;
use App\Pago;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now('America/Mexico_City')->toDateString();
        $entradas = Pago::all()
            ->where('date_pay', $dt )
            ->sum('amount');
        $salidas = Gasto::all()
            ->where('fecha', $dt)
            ->sum('cantidad');
        $total = $entradas - $salidas;
        $eventos = Evento::all()
            ->where('fecha', $dt);
        return view('home', compact('entradas', 'salidas', 'total', 'eventos'));
    }
}
