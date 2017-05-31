@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($paquetes->count() < 0)
            <div class="pull-left">
                <h2 style="color: #e7bd42">Paquetes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/paquetes/create">Agregar Paquete</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                @foreach($paquetes as $paquete)
                    <tr class="active">
                        <td>{{$paquete->nombre}}</td>
                        <td>{{$paquete->descripcion}}</td>
                        <td>$ {{$paquete->precio}}</td>
                        <td>
                            <a class="btn btn-info" href="/paquetes/{{$paquete->id}}/edit">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
                @else
                <p>No hay paquetes aún</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/paquetes/create">Crear Paquete</a>
                </div>
                @endif
        </div>
    </div>
@endsection