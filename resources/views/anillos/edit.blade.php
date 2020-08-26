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
                        <form action="/anillos/{{$anillo->id}}" method="POST" >
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <input type="hidden" name="contrato_id" value="{{$anillo->contrato_id}}">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <div></div>
                                        <select name="type">
                                            <option value="{{$anillo->type}}">{{$anillo->type}}</option>
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
                                        <input type="number" class="form-control" name="weight" value="{{$anillo->weight}}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Medida</label>
                                        <input type="text" class="form-control" name="size" value="{{$anillo->size}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input type="text" class="form-control" name="size" value="{{$anillo->model}}">
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>$</label>
                                        <input type="number" name="cost" value="{{$anillo->cost}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Editar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection