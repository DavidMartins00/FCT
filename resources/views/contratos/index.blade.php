@extends('layouts/app')
@section('content')
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Operadora</th>
                    <th>NIF</th>
                    <th>Nome</th>
                    <th>Data Activação</th>
                    <th>Agendado</th>
                    <th>Instalado</th>
                    <th>Ok / Not Ok</th>
                    <th>Tarifario</th>
                    <th>Instalado p/nos</th>
                    <th>Valor s/iva</th>
                    <th>Valor do iva</th>
                    <th>Valor c/Iva Receber</th>
                    <th>Recebido</th>
                    <th>Contrato entregue</th>
                    <th>Documentos</th>

                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @forelse ($contr as $var)
                <tr>
                    <td>{{$var->id}}</td>
                    <td>{{$var->op_id}}</td>
                    <td>{{$var->nif}}</td>
                    <td>{{$var->nome}}</td>
                    <td>{{$var->dataativ}}</td>
                    <td>{{$var->agendado}}</td>
                    <td>{{$var->instalado}}</td>
                    <td>{{$var->oknok}}</td>
                    <td>{{$var->tarifario}}</td>
                    <td>{{$var->instaladoPNos}}</td>
                    <td>{{$var->valsIva}}</td>
                    <td>{{$var->valIva}}</td>
                    <td>{{$var->valIvaR}}</td>
                    <td>{{$var->recebido}}</td>
                    <td>{{$var->contEntregue}}</td>
                    <td>{{$var->doc}}</td>

                    <td class="text-center"><a class='btn btn-info btn-xs' href="/user/{{$var->id}}/edit">Edit</a> <form action="/user/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
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
