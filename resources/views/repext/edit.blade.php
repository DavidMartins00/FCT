@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Reparações</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/repext/{{$var->id}}" method="post">
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
                                    <input type="text" class="form-control" name="morada" id="morada" aria-describedby="morada" value="{{$var->morada}}" placeholder="morada" required>
                                    <label for="morada">morada</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cdpost" id="cdpost" aria-describedby="cdpost" value="{{$var->cdpost}}" placeholder="cdpost" required>
                                    <label for="cdpost">cdpost</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="localidade" id="localidade" aria-describedby="localidade" value="{{$var->localidade}}" placeholder="localidade" required>
                                    <label for="localidade">localidade</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contrib" id="contrib" aria-describedby="contrib" value="{{$var->contrib}}" placeholder="contrib" required>
                                    <label for="contrib">contrib</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contacto" id="contacto" aria-describedby="contacto" value="{{$var->contacto}}" placeholder="contacto" required>
                                    <label for="contacto">contacto</label>
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
