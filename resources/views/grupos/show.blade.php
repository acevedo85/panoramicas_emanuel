@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">Grupo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/clientes/create/{{$grupo->id}}">Agregar Cliente</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Escuela</th>
                </tr>
                <tr class="active">
                    <td>{{$grupo->nombre}}</td>
                    <td>{{$grupo->career}}</td>
                    <td>{{$grupo->school}}</td>
                </tr>
            </table>
        </div>
    </div>

    @if($grupo->clientes->count() > 0)
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                <h2 style="color: #e7bd42">Clientes</h2>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Generacion</th>
                    <th>Acciones</th>
                </tr>
                
                @foreach($grupo->clientes as $cliente)
                    <tr class="active">
                        <td>{{$cliente->name}} {{$cliente->paterno}} {{$cliente->materno}}</td>
                        <td>{{$cliente->address}}</td>
                        <td>{{$cliente->generation}}</td>
                        <td>
                            <a class="btn btn-primary" href="/clientes/{{$cliente->id}}">Mostrar</a>
                            <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Editar</a>
                        </td>
                    </tr>
                @endforeach
                @else
                    
                    @endif
            </table>
        </div>
    </div>
@endsection