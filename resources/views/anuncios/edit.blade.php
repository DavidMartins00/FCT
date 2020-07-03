@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

    <section class="ready__started project__form">
        <div class="container">
            <h3 class="text-center">Editar Anuncio</h3>
            <div class="ready__started-box">
                <form class="main__form" action="/anuncio/{{$var->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" aria-describedby="nome"
                                       value="{{$var->nome}}" placeholder="nome" required>
                                <label for="nome">Nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="preco" aria-describedby="preco"
                                       value="{{$var->preco}}" placeholder="Preço" required>
                                <label for="preco">Preço</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-message">
                                <textarea class="form-control" name="desc" id="desc" rows="6" placeholder="Descrição">{{$var->desc}}</textarea>
                                <label for="desc">Descrição</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="img" aria-describedby="img"
                                       value="{{$var->img}}" placeholder="img" required>
                                <label for="img">Link Imagem</label>
                                <small class="form-check-label">Recomendo usar o <a href="https://imgur.com/upload?beta">Imgur</a> depois "Abrir imagem em novo separador" e copiar link</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="vis" id="vis" style="height: 60px">
                                    <option selected hidden value="{{$var->vis}}">
                                            @if($var->vis == 1)
                                    Sim
                                            @else
                                     Não
                                    @endif
                                    </option>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                                <label for="role">Visivel</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class=" btn btn-get"><span> Submeter!</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
