@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Agregar Evento</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/eventos" method="POST" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="fecha">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Hora</label>
                                        <input type="time" class="form-control" name="hora">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Evento</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Lugar</label>
                                        <input type="text" class="form-control" name="lugar">
                                    </div>
                                </div>
                            </div>
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