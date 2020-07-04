@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Produto Encomenda</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/pencomenda/{{$var->id}}" method="post">
                        @csrf
                        @method('put')


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" value="{{$var->nome}}" placeholder="nome" required>
                                    <label for="nome">nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="qtd" id="qtd" aria-describedby="qtd" value="{{$var->qtd}}" placeholder="qtd" required>
                                    <label for="qtd">qtd</label>
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="idNota" id="idNota" aria-describedby="idNota" value="{{$var->idNota}}" placeholder="idNota" required>
                                    <label for="idNota">idNota</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="idProd" id="idProd" aria-describedby="idProd" value="{{$var->idProd}}" placeholder="idProd" required>
                                    <label for="idProd">idProd</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submeter!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
