@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">Paquete {{$paquete->nombre}}</h2>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
                <tr class="active">
                    <td>{{$paquete->descripcion}}</td>
                    <td>$ {{$paquete->precio}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection