@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Agregar Gasto</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/gastos" method="POST" >
                            {{csrf_field()}}
                            <input name="user_id" type="hidden" value="{{Auth::id()}}">
                            <div class="form-group">
                                <div class="row">
                                <div class="col-md-4">
                                <label>Fecha</label>
                                <input disabled type="date" class="form-control" name="fecha" value="{{\Carbon\Carbon::now()->toDateString()}}">
                                </div>
                                </div>
                            </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="descripcion">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Cantidad</label>
                                                <span>$</span><input type="number" class="form-control" name="cantidad">
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