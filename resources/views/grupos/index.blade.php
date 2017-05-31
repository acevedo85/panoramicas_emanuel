@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            <div class="pull-left">
                @if($grupos->count() < 0)
                <h2 style="color: #e7bd42">Grupos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/grupos/create">Agregar Grupo</a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Nombre</th>
                    <th>Escuela</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
                @foreach($grupos as $grupo)
                    <tr class="active">
                        <td> {{$grupo->nombre}}</td>
                        <td> {{$grupo->school}}  </td>
                        <td>{{$grupo->career}}</td>
                        <td>
                            <a class="btn btn-primary" href="/grupos/{{$grupo->id}}">Mostrar</a>
                            <a class="btn btn-info" href="/grupos/{{$grupo->id}}/edit">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            @else
                <p>No hay grupos aún, se debe crear uno antes de agregar clientes, en caso de no pertenecer un grupo crear un grupo generico.</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/grupos/create">Crear Grupo</a>
                </div>
                @endif
        </div>
    </div>
@endsection