@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Nuevo Cliente</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/clientes" method="POST" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre(s)">
                            </div>
                            {{--<div class="form-group">
                                <input type="number" class="form-control" name="group_id" placeholder="prueba de grupo(s)">
                            </div>--}}
                            <div class="row">
                                <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="paterno" placeholder="Apellido paterno">
                            </div>
                                </div>
                                <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="materno" placeholder="Apellido materno">
                            </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Direccion">
                            </div>
                          {{--  <div class="form-group">
                                <input type="text" class="form-control" name="school" placeholder="Escuela">
                            </div>--}}
                            <div class="row">
                               {{-- <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="career" placeholder="Carrera">
                            </div>
                                </div>--}}
                                <div class="col-xs-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="generation" placeholder="Generacion">
                            </div>
                                </div>

                                <div class="col-xs-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Telefono">
                            </div>
                                </div>
                                <div class="col-xs-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
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

                            {{--<div class="form-group">
                                <input type="text" class="form-control" name="group" placeholder="Grupo">
                            </div>--}}
                            <div class="row">
                            <p>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</p>
                                @if($grupos->count() > 0)
                            <button type="submit" class="btn btn-danger pull-right">Crear</button>
                                    @else
                                    <p>No hay grupos registrados, crea uno primero</p>
                                    @endif
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection