@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Tel Substituto</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/substituto/{{$var->id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="marca" aria-describedby="marca" value="{{$var->marca}}" placeholder="marca" required>
                                    <label for="marca">marca</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="modelo" aria-describedby="modelo" value="{{$var->modelo}}" placeholder="modelo" required>
                                    <label for="modelo">modelo</label>
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
                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submeter!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
