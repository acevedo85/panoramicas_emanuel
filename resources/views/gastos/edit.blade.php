@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Editar Gasto</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/gastos/{{$gasto->id}}" method="POST" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="fecha" value="{{$gasto->fecha}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="descripcion" value="{{$gasto->descripcion}}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Cantidad</label>
                                        <span>$</span><input type="number" class="form-control" name="cantidad" value="{{$gasto->cantidad}}">
                                    </div>
                                </div>
                            </div>
                            <p>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</p>
                            <button type="submit" class="btn btn-danger pull-right">Guardar Cambios</button>
                            </row>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection