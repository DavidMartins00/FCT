@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="{{ route('anuncio.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="nome" aria-describedby="nome"  placeholder="nome" required>
                                    <label for="nome">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="preco" aria-describedby="preco"  placeholder="Preço" required>
                                    <label for="preco">Preço</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-message">
                                    <textarea class="form-control" name="desc" id="desc" rows="6" placeholder="Descrição"></textarea>
                                    <label for="desc">Descrição</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="img" aria-describedby="img" placeholder="img" required>
                                    <label for="img">Link Imagem</label>
                                    <small class="form-check-label">Recomendo usar o <a href="https://imgur.com/upload?beta">Imgur</a> depois "Abrir imagem em novo separador" e copiar link</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="vis" id="vis" style="height: 60px" >
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                    </select>
                                    <label for="role">Visivel</label>
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
