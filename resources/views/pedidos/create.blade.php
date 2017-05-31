@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2>Nuevo Pedido</h2>
                    </div>
                    <div class="panel-body">
                        <form action="/pedidos" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="contrato_id" value="{{$id}}">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Elige paquete</label>
                                    <select onchange="myFunction(this.value)">
                                        <option value=""></option>
                                        @foreach($paquetes as $paquete)
                                        <option value="{{$paquete}}">{{$paquete->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <a class="pull-right" href="/paquetes/create">Crear Paquete</a>
                                </div>
                            </div>
                            <div class="form-group>">
                                <input type="hidden" name="package" id="name">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <div></div>
                                       <input type="text" name="model" placeholder="modelo de las bases">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Color de Base</label>
                                        <div></div>
                                        <input type="text" name="base_color" placeholder="color de las bases">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Color de placa</label>
                                        <div></div>
                                        <input type="text" name="plaque_color" placeholder="color de placa">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Modelo de placa</label>
                                        <div></div>
                                        <input type="text" name="plaque_model" placeholder="modelo de placa">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Agradecimiento con foto</label>
                                        <div>
                                            <input type="radio" name="picture" value="si" checked> Si
                                            <input type="radio" name="picture" value="no"> No
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Numero de texto</label>
                                        <div></div>
                                        <input type="number" name="text_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Dedicado</label>
                                        <input type="text" name="dedicated_to">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Anexos
                                        </label>
                                        <input type="text" class="form-control" name="anexos" >
                                    </div>
                                </div>
                                <label>Precio</label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>$ </label>
                                        <input type="text" id="precio" name="cost">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction(val) {
            var json= JSON.parse(val);
           document.getElementById('precio').value = json.precio;
           document.getElementById('name').value = json.nombre;
        }
 /*       function updateValues(el) {
            var form = el.form;
            var v = el.value;
            v = v.replace(/^\[\'|\'\]$/g,'').split("', '");
            form.nombre.value = v[1];
            form.precio.value = v[0];
        }*/
    </script>

@endsection