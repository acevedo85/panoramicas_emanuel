@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($clientes->count() > 0)
            <div class="pull-left">
                <h2 style="color: #e7bd42">Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/clientes/create">Crear Cliente</a>
            </div>

    <table class="table table-bordered">
        <tr class="danger">
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Acciones</th>
            <th>Admin</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr class="active">
                <td> {{$cliente->id}}</td>
                <td> {{$cliente->name}}  </td>
                <td>{{$cliente->paterno}}</td>
                <td>{{$cliente->materno}}</td>
                <td>
                    <a class="btn btn-primary" href="/clientes/{{$cliente->id}}">Mostrar</a>
                    <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Editar</a>
                    <td>
                    <form action="/contratos/{{$cliente->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger btn-sm">
                            Borrar
                        </button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
    </table>
                @else
                <p>No hay clientes aun</p>
                <div class="pull-right">
                    <a class="btn btn-danger" href="/clientes/create">Crear Cliente</a>
                </div>
            @endif
        </div>
    </div>

    {{-- <div class="container">
         <div class="row">
                 <div class="col-md-10 col-md-offset-2">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <h3 class="panel-title pull-left">Lista de Clientes</h3>
                             <a href="/clientes/create/" class="btn btn-primary pull-right" role="button">Nuevo</a>
                             <div class="clearfix"></div>
                         </div>
                         <div class="panel-body">
                             <table class="table table-bordered">
                                 <tr>
                                     <th>Id</th>
                                     <th>Nombre</th>
                                     <th>Apellido Paterno</th>
                                     <th>Apellido Materno</th>
                                     --}}{{--<th>Escuela</th>
                                     <th>Carrera</th>
                                     <th>Generación</th>
                                     <th>Grupo</th>--}}{{--
                                 </tr>
                                 @forelse($clientes as $cliente)
                                 <tr>
                                     <td>  <a href="/clientes/{{$cliente->id}}">{{$cliente->id}}</a></td>
                                     <td> {{$cliente->name}}  </td>
                                         <td>{{$cliente->paterno}}</td>
                                         <td>{{$cliente->materno}}</td>
                                   --}}{{--  <td>{{$cliente->school}}</td>
                                     <td>{{$cliente->career}}</td>
                                     <td>{{$cliente->generation}}</td>
                                     <td>{{$cliente->group}}</td>--}}{{--
                                 </tr>
                                 @empty
                                     No existen clientes
                                 @endforelse
                             </table>
                         </div>
                     </div>
                 </div>

         </div>
     </div>
     <div class="row">
         <div class="col-md-4 col-md-offset-4">
             {{$clientes->links()}}
         </div>
     </div>--}}
@endsection