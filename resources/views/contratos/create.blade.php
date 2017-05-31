@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Crear Contrato</h4>
                    </div>

                    <div class="panel-body">
                        <form action="/contratos" method="POST" >
                            {{csrf_field()}}
                            <input type="hidden" name="cliente_id" value="{{$id}}">
                            <div class="row">
                                <div class="col-xs-6">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="date" class="form-control" name="creado_en">
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
                                        <input type="date" class="form-control" name="entregado_en">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection