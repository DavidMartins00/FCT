@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Reparações</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="{{ route('reparacoes.store') }}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="idCliente" id="idCliente" style="height: 60px" >
                                        @foreach ($cli as $i)
                                            <option value="{{$i->id}}">{{$i->nome}}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Cliente</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contacto" id="contacto" aria-describedby="contacto"  placeholder="Contacto" required>
                                    <label for="contacto">Contacto</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="marca" id="marca" aria-describedby="marca" placeholder="Marca" required>
                                    <label for="marca">Marca</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="modelo" placeholder="Modelo" required>
                                    <label for="modelo">Modelo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="imei" id="imei" aria-describedby="imei" placeholder="IMEI" required>
                                    <label for="imei">IMEI</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="idStatus" id="idStatus" style="height: 60px" >
                                        @foreach ($stat as $i)
                                            <option value="{{$i->id}}">{{$i->status}}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Status</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="data" id="data" aria-describedby="data" placeholder="Data" required>
                                    <label for="data">Data</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="valor" id="valor" aria-describedby="valor" placeholder="Valor" required>
                                    <label for="valor">Valor</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="idRepExt" id="idRepExt" style="height: 60px" >
                                        @foreach ($rep as $i)
                                            <option value="{{$i->id}}">{{$i->nome}}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Reparador</label>
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
