@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-offset-2">
                    @if($contratos->count() <0)
                    <div class="pull-left">
                        <h2 style="color: #e7bd42">Contratos</h2>
                    </div>
                    {{-- <div class="pull-right">
                         <a class="btn btn-danger" href="/contratos/create/{{$cliente->id}}">Agregar Contrato</a>
                     </div>--}}

                    <table class="table table-bordered">
                        <tr class="danger">
                            <th>Folio</th>
                            <th>Fecha de Recibido</th>
                            <th>Estado</th>
                            <th>Fecha de Entrega</th>
                            <th>Acciones</th>
                            <th>Admin</th>
                        </tr>
                        @forelse($contratos as $contrato)
                            <tr class="active">
                                <td>{{$contrato->id}}</td>
                                <td>{{$contrato->creado_en}}</td>
                                <td>{{$contrato->status}}</td>
                                <td>{{$contrato->entregado_en}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/contratos/{{$contrato->id}}">Mostrar</a>
                                    <a class="btn btn-info" href="/contratos/{{$contrato->id}}/edit">Editar</a>
                                </td>
                                <td>
                                    <form action="/contratos/{{$contrato->id}}" method="POST">

                                        {{csrf_field()}}

                                        {{method_field('DELETE')}}

                                        <button class="btn btn-danger btn-sm">
                                            Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                        @else
                        <p>No existen contratos aún, para crear un contrato primero selecciona / agrega un cliente</p>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/clientes/">Ver Clientes</a>
                        </div>
                        @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-md-offset-4">
                {{$contratos->links()}}
            </div>
        </div>
    {{--<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contratos</div>
                    <div class="panel-body">
                        @forelse($contratos as $contrato)
                        <table class="table table-bordered">

                            <tr>
                                <th>Folio</th>
                                <th>Cliente</th>
                                <th>Recibido</th>
                                <th>Estado</th>
                                <th>Fecha de Entrega</th>
                            </tr>

                                <tr>
                                    --}}{{--<td>  <a href="/clientes/{{$contrato->cliente->id}}">{{$contrato->cliente->id}}</a></td>--}}{{--
                                    <td>{{$contrato->id}}</td>
                                    <td><a href="/clientes/{{$contrato->cliente->id}}"> {{$contrato->cliente->name}} {{$contrato->cliente->paterno}} {{$contrato->cliente->materno}}</a> </td>
                                    <td>{{$contrato->creado_en}}</td>
                                    <td>{{$contrato->status}}</td>
                                    <td>{{$contrato->entregado_en}}</td>
                                </tr>
                            @empty
                                No existen contratos


                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
   --}}
@endsection