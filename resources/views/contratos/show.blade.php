@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-offset-2">
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Contrato {{$contrato->id}}</h2>
                </div>
                <table class="table table-responsive table-bordered">
                    <tr class="danger">
                        <th>Recibido</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Entrega</th>
                        {{--<th>Total</th>--}}
                        <th>Acciones</th>
                    </tr>
                        <tr class="active">
                            <td>{{$contrato->creado_en}}</td>
                            <td>{{$contrato->cliente->name}}</td>
                            <td>{{$contrato->status}}</td>
                            <td>{{$contrato->entregado_en}}</td>
                            {{--<td>$ {{$total}}</td>--}}
                            <td>
                                <a class="btn btn-primary" href="/pedidos/create/{{$contrato->id}}">+ Paquete</a>
                                <a class="btn btn-info" href="/anillos/create/{{$contrato->id}}">+ Anillo</a>
                                <a class="btn btn-success" href="/pagos/create/{{$contrato->id}}">+ Pago</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
        @forelse($contrato->pedidos as $pedido)
        <div class="row">
            <div class="col-md-9 col-lg-offset-2">
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Pedidos</h2>
                </div>
                <table class="table table-bordered">
                    <tr class="danger">
                        <th>Paquete</th>
                        <th>Modelo</th>
                        <th>Color de base</th>
                        <th>Color de placa</th>
                        <th>Modelo de placa</th>
                        <th>Agradecimiento con foto</th>
                        <th>Número de texto</th>
                        <th>Dedicatoria</th>
                        <th>Anexos</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                        <th>Admin</th>
                    </tr>
                    
                        <tr class="active">
                            <td>{{$pedido->package}}</td>
                            <td>{{$pedido->model}}</td>
                            <td>{{$pedido->base_color}}</td>
                            <td>{{$pedido->plaque_color}}</td>
                            <td>{{$pedido->plaque_model}}</td>
                            <td>{{$pedido->picture}}</td>
                            <td>{{$pedido->text_number}}</td>
                            <td>{{$pedido->dedicated_to}}</td>
                            <td>{{$pedido->anexos}}</td>
                            <td>{{$pedido->cost}}</td>
                            <td>
                                <a class="btn btn-primary" href="/pedidos/{{$pedido->id}}/edit">Editar </a>
                            </td>
                            <td>
                                <form action="/pedidos/{{$pedido->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </table>
            </div>
        </div>
        @if($contrato->anillos->count() > 0)
        <div class="row">
            <div class="col-md-9 col-lg-offset-2">
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Anillos</h2>
                </div>
                @forelse($contrato->anillos as $anillo)
                <table class="table table-bordered">
                    <tr class="danger">
                        <th>Tipo</th>
                        <th>Peso</th>
                        <th>Medida</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                        <th>Admin</th>
                    </tr>
                    
                        <tr class="active">
                            <td>{{$anillo->type}}</td>
                            <td>{{$anillo->weight}}</td>
                            <td>{{$anillo->size}}</td>
                            <td>${{$anillo->cost}}</td>
                            <td>
                                <a class="btn btn-primary" href="/anillos/{{$anillo->id}}/edit">Editar </a>
                            </td>
                            <td>
                                <form action="/anillos/{{$anillo->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    
                    @endforelse
                </table>
            </div>
        </div>
        @endif
        @forelse($contrato->pagos as $pago)
        <div class="row">
            <div class="col-md-9 col-lg-offset-2">
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Pagos</h2>
                </div>
                <table class="table table-bordered">
                    <tr class="danger">
                        <th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                        <th>Admin</th>
                    </tr>
                    
                        <tr class="active">
                            <td>{{$pago->date_pay}}</td>
                            <td>$ {{$pago->amount}}</td>
                            <td>
                                <a class="btn btn-primary" href="/pagos/{{$pago->id}}/edit">Editar </a>
                            </td>
                            <td>
                                <form action="/pagos/{{$pago->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection