@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Nuevo Grupo</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/grupos" method="POST" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del grupo">
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="career">Carrera</label>
                                        <input type="text" class="form-control" name="career" placeholder="Carrera">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="school">Escuela</label>
                                        <input type="text" class="form-control" name="school" placeholder="Escuela o Institucion">
                                    </div>
                                </div>
                            </div>
                            <row>
                                <p>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</p>
                                <button type="submit" class="btn btn-danger pull-right">Crear</button>
                            </row>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection