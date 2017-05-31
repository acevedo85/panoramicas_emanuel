@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Editar Pedido</h4>
                    </div>

                    <div class="panel-body">
                        <form action="/pedidos/{{$pedido->id}}" method="POST" >
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <input type="hidden" name="paquete_id" value="{{$pedido->paquete_id}}">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <div></div>
                                        <input type="text" name="model" value="{{$pedido->model}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Color de Base</label>
                                        <div></div>
                                        <input type="text" name="base_color" value="{{$pedido->base_color}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Color de placa</label>
                                        <div></div>
                                        <input type="text" name="plaque_color" value="{{$pedido->plaque_color}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Modelo de placa</label>
                                        <div></div>
                                        <input type="text" name="plaque_model" value="{{$pedido->plaque_model}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Agradecimiento con foto</label>
                                        <div>
                                            <input type="radio" name="picture" value="{{$pedido->picture}}" checked>
                                            <input type="radio" name="picture" value="si"> Si
                                            <input type="radio" name="picture" value="no"> No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Numero de texto</label>
                                        <div></div>
                                        <input type="number" name="text_number" value="{{$pedido->text_number}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Dedicado</label>
                                        <input type="text" name="dedicated_to" value="{{$pedido->dedicated_to}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    Anexos
                                </label>
                                <input type="text" class="form-control" name="anexos" value="{{$pedido->anexos}}">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection