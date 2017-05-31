@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anillo
                        <div class="pull-right">
                            <a href="/anillos/{{$anillo->id}}/edit">Editar </a>
                        </div>

                    </div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Folio Contrato</h4>
                                <p class="list-group-item-text">{{$anillo->contrato_id}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Tipo</h4>
                                <p class="list-group-item-text">{{$anillo->type}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Peso</h4>
                                <p class="list-group-item-text">{{$anillo->weight}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Medida</h4>
                                <p class="list-group-item-text">{{$anillo->size}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Costo</h4>
                                <p class="list-group-item-text">${{$anillo->cost}}</p>
                            </li>
                            <li class="list-group-item">
                                <form action="/anillos/{{$anillo->id}}" method="POST">

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