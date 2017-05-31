@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-offset-2">
            @if($pagos->count() <0)
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
                @foreach($pagos as $pago)
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
                @endforeach
            </table>
                @else
            <p>No hay pagos aún, para crear un pago se debe elegir/crear un contrato</p>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/contratos/">Ver Contratos</a>
                </div>
                @endif
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$pagos->links()}}
        </div>
    </div>
@endsection