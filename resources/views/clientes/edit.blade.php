@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Editar Cliente</h2>
                    </div>
                    <div class="panel-body">
                        <form action="/clientes/{{$cliente->id}}" method="POST" >
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <label>Nombre</label>
                            <div class="row">
                                <div class="col-xs-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{$cliente->name}}" >
                            </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="paterno"value="{{$cliente->paterno}}">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="materno" value="{{$cliente->materno}}">
                                    </div>
                                </div>
                            </div>
                            <label>Direccion</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" value="{{$cliente->address}}">
                            </div>
                            <label>Generación</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="generation" value="{{$cliente->generation}}">
                                    </div>
                                </div>
                            </div>
                            <label>Telefono e Email</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" value="{{$cliente->phone}}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" value="{{$cliente->email}}">
                                    </div>
                                </div>
                            </div>
                            @if($grupos->count() <1)
                                <h6>No existen grupos, crea uno</h6>
                            @else
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Grupo</label>
                                        <select name="grupo_id">
                                            @foreach($grupos as $grupo)
                                                <option  value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                        <div class="col-md-4 pull-right">
                                            <a href="/grupos/create">Agregar Grupo</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-danger pull-right">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection