@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($gastos->count() < 0)
            <div class="pull-left">
                <h2 style="color: #e7bd42">Gastos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/gastos/create">Agregar Gasto</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    {{--<th>Acciones</th>--}}
                </tr>
                @foreach($gastos as $gasto)
                    <tr class="active">
                        <td> {{$gasto->fecha}}</td>
                        <td> {{$gasto->descripcion}}  </td>
                        <td>$ {{$gasto->cantidad}}</td>
                        <td> {{$gasto->user_id}}</td>
                        {{--<td>
                            <a class="btn btn-primary" href="/clientes/{{$cliente->id}}">Mostrar</a>
                            <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Editar</a>
                        </td>--}}
                    </tr>
                @endforeach
            </table>
                @else
                <p>No hay gastos aún</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/gastos/create">Agregar Gasto</a>
                </div>
            @endif
        </div>
    </div>
@endsection