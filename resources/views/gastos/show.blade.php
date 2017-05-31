@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">Gasto</h2>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    {{--<th>Acciones</th>--}}
                </tr>
                    <tr class="active">
                        <td> {{$gasto->fecha}}</td>
                        <td> {{$gasto->descripcion}}  </td>
                        <td>{{$gasto->cantidad}}</td>
                        <td>{{$gasto->user_id}}</td>
                        {{--<td>
                            <a class="btn btn-primary" href="/clientes/{{$cliente->id}}">Mostrar</a>
                            <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Editar</a>
                        </td>--}}
                    </tr>
            </table>
        </div>
    </div>
@endsection