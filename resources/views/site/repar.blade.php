@extends('layouts/app')
@section('content')
    <link href="{{asset("css/tabp.css")}}" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body class="dark-theme">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-box">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Status</th>
                                <th>Reparador</th>
                                <th>Contacto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>IMEI</th>
                                <th>Data</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($rep as $var)
                                <tr>
                                    <td>{{$var->id}}</td>
                                    <td>{{$var->User->name}}</td>
                                    <td>{{$var->Status->status}}</td>
                                    <td>{{$var->repExt->nome}}</td>
                                    <td>{{$var->contacto}}</td>
                                    <td>{{$var->marca}}</td>
                                    <td>{{$var->modelo}}</td>
                                    <td>{{$var->imei}}</td>
                                    <td>{{$var->data}}</td>
                                    <td>{{$var->valor}}</td>
                                </tr>
                            @empty

                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection
