@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pedido
                        <div class="pull-right">
                            <a href="/pedidos/{{$pedido->id}}/edit">Editar </a>
                        </div>

                    </div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Contrato</h4>
                                <p class="list-group-item-text">{{$pedido->contrato_id}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Modelo</h4>
                                <p class="list-group-item-text">{{$pedido->model}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Color de base</h4>
                                <p class="list-group-item-text">{{$pedido->base_color}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Color de Placa</h4>
                                <p class="list-group-item-text">{{$pedido->plaque_color}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Modelo de Placa</h4>
                                <p class="list-group-item-text">{{$pedido->plaque_model}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Agradecimiento con foto</h4>
                                <p class="list-group-item-text">{{$pedido->picture}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Agradecimiento</h4>
                                <p class="list-group-item-text">{{$pedido->text_number}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Dedicado a</h4>
                                <p class="list-group-item-text">{{$pedido->dedicated_to}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Agradecimiento con foto</h4>
                                <p class="list-group-item-text">{{$pedido->picture}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Anexos</h4>
                                <p class="list-group-item-text">{{$pedido->anexos}}</p>
                            </li>
                            <li class="list-group-item">
                                <form action="/pedidos/{{$pedido->id}}" method="POST">

                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger btn-sm">
                                        Borrar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection