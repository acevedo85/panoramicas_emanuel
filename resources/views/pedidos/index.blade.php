@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($pedidos->count() >0)
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
                    <th>Acciones</th>
                    <th>Admin</th>
                </tr>
                @foreach($pedidos as $pedido)
                    <tr class="active">
                        <td>{{$pedido->paquete_id}}</td>
                        <td>{{$pedido->model}}</td>
                        <td>{{$pedido->base_color}}</td>
                        <td>{{$pedido->plaque_color}}</td>
                        <td>{{$pedido->plaque_model}}</td>
                        <td>{{$pedido->picture}}</td>
                        <td>{{$pedido->text_number}}</td>
                        <td>{{$pedido->dedicated_to}}</td>
                        <td>{{$pedido->anexos}}</td>
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
                @endforeach
                @else
                    <p>No hay pedidos aún, para crear un pedido se debe elegir/crear un contrato antes</p>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/contratos/">Ver Contratos</a>
                    </div>
                    @endif
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$pedidos->links()}}
        </div>
    </div>
@endsection