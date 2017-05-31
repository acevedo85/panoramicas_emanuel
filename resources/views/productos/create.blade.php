@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Agregar Producto</h2>
                    </div>

                    <div class="panel-body">
                        <form action="/productos" method="POST" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo">
                                    <option value="anillo">Anillo</option>
                                    <option value="cuadro">Foto</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input type="number" step="0.01" min="0.01" class="form-control" name="precio">
                                    </div>
                                </div>
                            </div>
                            <row>
                                <div>*Todos los campos son requeridos. En caso de no tener la información, poner "NA"</div>
                                <a class="btn btn-warning" href="/productos">Cancelar</a>
                                <button type="submit" class="btn btn-danger pull-right">Agregar</button>
                            </row>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection