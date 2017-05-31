@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pago
                        <div class="pull-right">
                            <a href="/pagos/{{$pago->id}}/edit">Editar </a>
                        </div>

                    </div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Folio Contrato</h4>
                                <p class="list-group-item-text">{{$pago->contrato_id}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Fecha</h4>
                                <p class="list-group-item-text">{{$pago->date_pay}}</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">Cantidad</h4>
                                <p class="list-group-item-text">{{$pago->amount}}</p>
                            </li>
                            <li class="list-group-item">
                                <form action="/anillos/{{$pago->id}}" method="POST">

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