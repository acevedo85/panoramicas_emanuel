@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($anillos->count() >0)
            <div class="pull-left">
                <h2 style="color: #e7bd42">Anillos</h2>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Tipo</th>
                    <th>Peso</th>
                    <th>Medida</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                    <th>Admin</th>
                </tr>
                @foreach($anillos as $anillo)
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
                @endforeach
            </table>
                @else
                <p>No hay pedidos de anillos aún, para crear un pedido se debe elegir/crear un contrato antes</p>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/contratos/">Ver Contratos</a>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$anillos->links()}}
        </div>
    </div>
@endsection