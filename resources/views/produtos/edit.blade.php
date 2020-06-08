@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/produto/{{$var->id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="nome" aria-describedby="nome" value="{{$var->nome}}" placeholder="nome" required>
                                    <label for="nome">nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="preco" aria-describedby="preco" value="{{$var->preco}}" placeholder="preco" required>
                                    <label for="preco">preco</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="imei" aria-describedby="imei" value="{{$var->imei}}" placeholder="imei" required>
                                    <label for="imei">imei</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-message">
                            <textarea class="form-control" name="desc" rows="6" placeholder="desc">{{$var->desc}}</textarea>

                            <label for="desc">desc</label>
                        </div>
                        <div class="form-groups">
                            <label class="btn-attached" for="img"><i class="fa fa-paperclip" aria-hidden="true"></i> Imagem</label>
                            <input style="display: none" type="file" class="form-control-file" name="img">
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submeter!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
