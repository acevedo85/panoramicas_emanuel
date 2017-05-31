@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Agregar Anillo</h4>
                    </div>

                    <div class="panel-body">
                        <form action="/anillos" method="POST" >
                            {{csrf_field()}}
                            <input type="hidden" name="contrato_id" value="{{$id}}">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <div></div>
                                        <select name="type">
                                            <option value="14k">14k</option>
                                            <option value="10k">10k</option>
                                            <option value="plata">Plata</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Peso (gramos)</label>
                                        <input type="number" class="form-control" name="weight">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Medida</label>
                                        <input type="text" class="form-control" name="size">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>$</label>
                                        <input type="number" name="cost">
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