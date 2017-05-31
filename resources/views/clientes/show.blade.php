@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">{{$cliente->name}}  {{$cliente->paterno}} {{$cliente->materno}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/contratos/create/{{$cliente->id}}">Agregar Contrato</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    {{--<th>Grupo</th>--}}
                    <th>Generación</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
                    <tr class="active">
                        {{--<td>{{$cliente->grupos->nombre}}</td>--}}
                        <td>{{$cliente->generation}}</td>
                        <td>{{$cliente->phone}}</td>
                        <td>{{$cliente->email}}</td>
                    </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">Contratos</h2>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Folio</th>
                    <th>Fecha Recibido</th>
                    <th>Estado</th>
                    <th>Fecha Entrega</th>
                    <th>Acciones</th>
                </tr>
               <!-- @forelse($contratos as $contrato)-->
                <tr class="active">
                    <td>{{$contrato->id}}</td>
                    <td>{{$contrato->creado_en}}</td>
                    <td>{{$contrato->status}}</td>
                    <td>{{$contrato->entregado_en}}</td>
                    <td>
                        <a class="btn btn-primary" href="/contratos/{{$contrato->id}}">Mostrar</a>
                        <a class="btn btn-info" href="/contratos/{{$contrato->id}}/edit">Editar</a>
                    </td>
                </tr>
                @empty
                    No hay contratos.
                    @endforelse
            </table>
        </div>
    </div>
 {{--   <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cliente
                        <div class="pull-right">
                            <a href="/clientes/{{$cliente->id}}/edit">Editar </a>
                        </div>

                    </div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                            <h4 class="list-group-item-heading">Nombre</h4>
                            <p class="list-group-item-text">{{$cliente->name}} {{$cliente->paterno}} {{$cliente->materno}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Escuela</h4>
                                <p class="list-group-item-text">{{$cliente->school}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Carrera</h4>
                                <p class="list-group-item-text">{{$cliente->career}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Generación</h4>
                                <p class="list-group-item-text">{{$cliente->generation}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Grupo</h4>
                                <p class="list-group-item-text">{{$cliente->group}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Telefono</h4>
                                <p class="list-group-item-text">{{$cliente->phone}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Email</h4>
                                <p class="list-group-item-text">{{$cliente->email}}</p>
                            </li>
                            <li class="list-group-item">
                                <form action="/clientes/{{$cliente->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <a href="/contratos/create/{{$cliente->id}}" class="btn btn-primary pull-right" role="button">Contratos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>--}}
@endsection