@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Agregar Paquete</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/paquetes" method="POST" >
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del paquete">
                            </div>
                                    <div class="form-group">
                                        <label for="career">Descripción</label>
                                        <input type="text" class="form-control" name="descripcion" placeholder="Descripción del paquete">
                                    </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="school">Precio</label>
                                        <input type="number" class="form-control" name="precio">
                                    </div>
                                </div>
                            </div>
                            <row>
                                <p>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</p>
                                <button type="submit" class="btn btn-danger pull-right">Agregar</button>
                            </row>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection