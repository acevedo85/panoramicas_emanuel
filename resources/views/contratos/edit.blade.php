@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Editar Contrato</h4>
                    </div>
                    <div class="panel-body">
                        <form action="/contratos/{{$contrato->id}}" method="POST" >
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <input type="hidden" name="cliente_id" value="{{$contrato->cliente_id}}">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="creado_en" value="{{$contrato->creado_en}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <div></div>
                                        <select name="status">
                                            <option value="En proceso">En proceso</option>
                                            <option value="Terminado">Terminado</option>
                                            <option value="Entregado">Entregado</option>
                                            <option value="En bodega">En bodega</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Fecha Entrega</label>
                                        <input type="date" class="form-control" name="entregado_en" value="{{$contrato->entregado_en}}">
                                    </div>
                                </div>
                            </div>
                            {{--<div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">+ Pedido</button>
                                <button type="button" class="btn btn-default">+ Anillo</button>
                                <button type="button" class="btn btn-default">+ Pago</button>
                            </div>--}}
                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection