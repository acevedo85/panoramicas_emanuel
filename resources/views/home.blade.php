@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-lg-offset-2">
            <div class="panel panel-warning ">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h4>$ {{$entradas}}</h4>
                            <div>Entradas</div>
                        </div>
                    </div>
                </div>
                <a href="/pagos/today/">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-usd fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h4>$ {{$salidas}}</h4>
                            <div>Salidas</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h4>$ {{$total}}</h4>
                            <div>Total</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($eventos->count() >0)
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Eventos</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/eventos/create">Crear Evento</a>
                </div>
                <table class="table table-bordered">
                    <tr class="danger">
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Evento</th>
                        <th>Lugar</th>
                        <th>Acciones</th>
                        <th>Admin</th>
                    </tr>
                    @foreach($eventos as $evento)
                        <tr class="active">
                            <td>{{$evento->fecha}}</td>
                            <td>{{$evento->hora}}</td>
                            <td>{{$evento->nombre}}</td>
                            <td>{{$evento->lugar}}</td>
                            <td>
                                <a class="btn btn-primary" href="/eventos/{{$evento->id}}/edit">Editar </a>
                            </td>
                            <td>
                                <form action="/eventos/{{$evento->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>No existen eventos para hoy.</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/eventos/create">Crear Evento</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
