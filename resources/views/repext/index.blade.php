@extends('layouts/app')
@section('content')
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Morada</th>
                    <th>Cdpost</th>
                    <th>Localidade</th>
                    <th>Contrib</th>
                    <th>Contacto</th>

                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @forelse ($rep as $var)
                <tr>

                    <td>{{$var->id}}</td>
                    <td>{{$var->nome}}</td>
                    <td>{{$var->morada}}</td>
                    <td>{{$var->cdpost}}</td>
                    <td>{{$var->localidade}}</td>
                    <td>{{$var->contrib}}</td>
                    <td>{{$var->contacto}}</td>



                    <td class="text-center"><a class='btn btn-info btn-xs' href="/nencomenda/{{$var->id}}/edit">Edit</a> <form action="/nencomenda/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                </tr>
                @empty
                    <tr>
                        <div class="centercr">Lista Vazia</div>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection