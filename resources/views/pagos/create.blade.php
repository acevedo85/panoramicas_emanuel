@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Agregar Pago</h4>
                    </div>

                    <div class="panel-body">
                        <form action="/pagos" method="POST" >
                            {{csrf_field()}}
                            <input type="hidden" name="contrato_id" value="{{$id}}">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="date_pay">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>$</label>
                                        <input type="number" name="amount">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Crear</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection