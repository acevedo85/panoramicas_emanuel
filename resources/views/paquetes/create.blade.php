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
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del paquete" required>
                            </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" class="form-control" name="descripcion" placeholder="Descripción del paquete" required>
                                    </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input type="number" class="form-control" name="precio" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="segunda">Segunda Panoramica?</label>
                                        <input type="checkbox" id="segunda" name="segunda">
                                    </div>
                                </div>
                            </div>
                            <row>
                                <div>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</div>
                                </br>
                                <button type="submit" class="btn btn-success pull-right">Agregar</button>
                            </row>
                        </form>

                        <a href="{{ url()->previous() }}">Cancelar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection