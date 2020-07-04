@extends('layouts/app')
@section('content')
    <script src="{{asset('assetsTabel/js/bootstrap.js')}}"></script>
    <script src="{{asset('assetsTabel/js/jquery.js')}}"></script>
    <script src="{{asset('AssetsTabelF/js/js.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assetsTabel/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('AssetsTabelF/css/css.css')}}">

    <div class="container">
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Reparações</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Reparador" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Contacto" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Marca" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Modelo" disabled></th>
                    <th><input type="text" class="form-control" placeholder="IMEI" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Data" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                    <th class="text-center ">Ação</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($rep as $var)
                    <tr>
                        <td>{{$var->id}}</td>
                        <td>{{$var->User->name}}</td>
                        <td>{{$var->contacto}}</td>
                        <td>{{$var->marca}}</td>
                        <td>{{$var->modelo}}</td>
                        <td>{{$var->imei}}</td>
                        <td>{{$var->Status->status}}</td>
                        <td>{{$var->data}}</td>
                        <td>{{$var->valor}}</td>
                        <td>{{$var->repExt->nome}}</td>

                        <td class="text-center"><a class='btn btn-info btn-xs' href="/reparacoes/{{$var->id}}/edit">Edit</a> <form action="/reparacoes/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                    </tr>
                @empty

                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
