@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Editar Paquete</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/paquetes/{{$paquete->id}}/edit" method="POST" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{$paquete->nombre}}">
                            </div>
                            <div class="form-group">
                                <label for="career">Descripción</label>
                                <input type="text" class="form-control" name="descripcion" value="{{$paquete->descripcion}}">
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="school">Precio</label>
                                        <input type="number" class="form-control" value="{{$paquete->precio}}">
                                    </div>
                                </div>
                            </div>
                            <row>
                                <p>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</p>
                                <a class="btn btn-warning" href="/paquetes/{{$paquete->id}}">Cancelar</a>
                                <button type="submit" class="btn btn-danger pull-right">Guardar Cambios</button>
                            </row>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection