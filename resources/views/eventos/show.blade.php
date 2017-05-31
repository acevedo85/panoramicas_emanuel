@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
                <div class="pull-left">
                    <h2 style="color: #e7bd42">Evento</h2>
                </div>
                <table class="table table-bordered">
                    <tr class="danger">
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Evento</th>
                        <th>Lugar</th>
                        <th>Acciones</th>
                        <th>Admin</th>
                    </tr>
                    @foreach($eventos as $evento)
                        <tr class="active">
                            <td>{{$evento->fecha}}</td>
                            <td>{{$evento->hora}}</td>
                            <td>{{$evento->nombre}}</td>
                            <td>{{$evento->lugar}}</td>
                            <td>
                                <a class="btn btn-primary" href="/pagos/{{$evento->id}}/edit">Editar </a>
                            </td>
                            <td>
                                <form action="/pagos/{{$evento->id}}" method="POST">

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
                <p>No existen eventos aún, procede a crear uno.</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/eventos/create">Crear Evento</a>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$eventos->links()}}
        </div>
    </div>
@endsection