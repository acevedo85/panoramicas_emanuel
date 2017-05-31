@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                @if($productos->count() > 0)
                <h2 style="color: #e7bd42">Productos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/productos/create">Agregar Producto</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                @foreach($productos as $producto)
                    <tr class="active">
                        <td> {{$producto->nombre}}</td>
                        <td>{{$producto->tipo}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>
                            <a class="btn btn-info" href="/paquetes/{{$paquete->id}}/edit">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
                @else
                <div class="row">
                    <p>No hay productos aun, agrega uno.</p>

                        <a class="btn btn-danger" href="/productos/create">Agregar Producto</a>
            </div>
                @endif
        </div>
    </div>
@endsection