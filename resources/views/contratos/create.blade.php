@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="{{ route('contrato.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="op_id" aria-describedby="op_id"  placeholder="John" required>
                                    <label for="op_id">op_id</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" aria-describedby="nome"  placeholder="Doe" required>
                                    <label for="nome">nome</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="dataativ" aria-describedby="dataativ"  placeholder="example@xyz.com" required>
                                    <label for="dataativ">dataativ*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nif" aria-describedby="nif"  placeholder="xxx-xxx-xxxx" required>
                                    <label for="nif">nif</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="instalado" aria-describedby="instalado" placeholder="instalado" required>
                                    <label for="instalado">instalado</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="agendado" aria-describedby="agendado" placeholder="agendado" required>
                                    <label for="agendado">agendado</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="oknok" aria-describedby="oknok" placeholder="oknok" required>
                                    <label for="oknok">oknok</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="tarifario" aria-describedby="tarifario" placeholder="tarifario" required>
                                    <label for="tarifario">tarifario</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="instaladoPNos" aria-describedby="instaladoPNos" placeholder="instaladoPNos" required>
                                    <label for="instaladoPNos">instaladoPNos</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="valIva" aria-describedby="valIva" placeholder="valIva" required>
                                    <label for="valIva">valIva</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="valsIva" aria-describedby="valsIva" placeholder="valsIva" required>
                                    <label for="valsIva">valsIva</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="valIvaR" aria-describedby="valIvaR" placeholder="valIvaR" required>
                                    <label for="valIvaR">valIvaR</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="recebido" aria-describedby="recebido" placeholder="recebido" required>
                                    <label for="recebido">recebido</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contEntregue" aria-describedby="contEntregue" placeholder="contEntregue" required>
                                    <label for="contEntregue">contEntregue</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="doc" aria-describedby="doc" placeholder="doc" required>
                                    <label for="doc">doc</label>
                                </div>
                            </div>

                        </div>



                        <div class="form-groups">
                            <label class="btn-attached" for="attached_file"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</label>
                            <input style="display: none" type="file" class="form-control-file" id="attached_file">
                        </div>

                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submeter!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
