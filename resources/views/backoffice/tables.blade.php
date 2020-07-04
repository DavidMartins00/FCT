@extends('layouts.backoffice')
@section("contentB")

    <script src="{{asset('assetsTabel/js/bootstrap.js')}}"></script>
    <script src="{{asset('assetsTabel/js/jquery.js')}}"></script>
    <script src="{{asset('AssetsTabelF/js/js.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assetsTabel/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('AssetsTabelF/css/css.css')}}">
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <!------ Produtos ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Produtos</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="produto/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preço" disabled></th>
                        <th><input type="text" class="form-control" placeholder="IMEI" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Imagem" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Descrição" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($pro as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->nome}}</td>
                            <td>{{$var->preco}}</td>
                            <td>{{$var->imei}}</td>
                            <td>{{$var->desc}}</td>
                            <td>{{$var->img}}</td>


                            <td class="text-center"><a class='btn btn-info btn-xs' href="/produto/{{$var->id}}/edit">Edit</a> <form action="/produto/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Operadoras ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Operadoras</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="operadora/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Pais" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($op as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->nome}}</td>
                            <td>{{$var->pais}}</td>


                            <td class="text-center"><a class='btn btn-info btn-xs' href="/operadora/{{$var->id}}/edit">Edit</a> <form action="/operadora/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Substitutos ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Substitutos</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="substituto/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Marca" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Modelo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="IMEI" disabled></th>
                        <th class="text-center ">Ação</th>
                    </thead>
                    <tbody>
                    @forelse ($sub as $var)
                        <tr>

                            <td>{{$var->id}}</td>
                            <td>{{$var->marca}}</td>
                            <td>{{$var->modelo}}</td>
                            <td>{{$var->imei}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/substituto/{{$var->id}}/edit">Edit</a> <form action="/substituto/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Users ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Role" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Telefone" disabled></th>
                        <th><input type="text" class="form-control" placeholder="NIF" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Localidade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Morada" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Codigo Postal" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($usr as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->name}}</td>
                            <td>{{$var->email}}</td>
                            <td>{{$var->role}}</td>
                            <td>{{$var->telefone}}</td>
                            <td>{{$var->nif}}</td>
                            <td>{{$var->localidade}}</td>
                            <td>{{$var->morada}}</td>
                            <td>{{$var->codpost}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/user/{{$var->id}}/edit">Edit</a> <form action="/user/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Fornecedores ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Fornecedores</h3>
                        <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="fornecedores/create">Adicionar</a>
                            </div>
                        </div>
                     </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Morada" disabled></th>
                        <th><input type="text" class="form-control" placeholder="NIF" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Codigo Postal" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Codições Pagamento" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Telemovel" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Localidade" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($for as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->nome}}</td>
                            <td>{{$var->morada}}</td>
                            <td>{{$var->nif}}</td>
                            <td>{{$var->cpost}}</td>
                            <td>{{$var->cp}}</td>
                            <td>{{$var->email}}</td>
                            <td>{{$var->telemovel}}</td>
                            <td>{{$var->localidade}}</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="/fornecedores/{{$var->id}}/edit">Edit</a> <form action="/fornecedores/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Contratos ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Contratos</h3>
                      <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="contrato/create">Adicionar</a>
                            </div>
                        </div>
                      </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Operadora" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data Activação" disabled></th>
                        <th><input type="text" class="form-control" placeholder="NIF" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Agendado" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Instalado" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Ok/NãoOk" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tarifario" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Instalado/Nos" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valors/Iva" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor do IVA" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor c/IVA Receber" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Recebido" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Entrega Comercial" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Documentos" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($ctr as $var)
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

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/contrato/{{$var->id}}/edit">Edit</a> <form action="/contrato/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Status ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Status</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="status/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($stat as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->status}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/status/{{$var->id}}/edit">Edit</a> <form action="/status/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Reparadores ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Reparadores</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="repext/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Morada" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Codigo Postal" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Localidades" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Contribuinte" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Contactos" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
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

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Nota Encomenda ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Nota Encomenda</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="nencomenda/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Cliente" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($nenc as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->data}}</td>
                            <td>{{$var->User->name}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/nencomenda/{{$var->id}}/edit">Edit</a> <form action="/nencomenda/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Produtos Encomenda ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Produtos Encomenda</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="pencomenda/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Quantidade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ID Notas" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ID Produtos" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($pen as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->nome}}</td>
                            <td>{{$var->qtd}}</td>
                            <td>{{$var->idNota}}</td>
                            <td>{{$var->idProd}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/pencomenda/{{$var->id}}/edit">Edit</a> <form action="/pencomenda/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Reparações ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Reparações</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="reparacoes/create">Adicionar</a>
                            </div>
                        </div>
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
                    @forelse ($repx as $var)
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
        <!------ Intervenções ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Intervenções</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="intervencao/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Reparações" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Intervenções" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($int as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->interv}}</td>
                            <td>{{$var->idRep}}</td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/intervencao/{{$var->id}}/edit">Edit</a> <form action="/intervencao/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!------ Anuncios ---------->
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Anuncios</h3>
                    <div class="pull-center">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="btn btn-default btn-xs btn-filter">Filtrar</button>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-default btn-xs" href="anuncio/create">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preço" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Descrição" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Visivel" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Imagem" disabled></th>
                        <th class="text-center ">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($ad as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->nome}}</td>
                            <td>{{$var->preco}}€</td>
                            <td>{{$var->desc}}</td>
                            <td>@if($var->vis == 1)
                                Sim
                                @else
                                Não
                                @endif
                            </td>
                            <td><img src="{{$var->img}}" height="50px" width="auto"></td>

                            <td class="text-center"><a class='btn btn-info btn-xs' href="/anuncio/{{$var->id}}/edit">Edit</a> <form action="/anuncio/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete') <input type="submit" name="" class="btn btn-danger btn-xs" value="Del"> </form></td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
