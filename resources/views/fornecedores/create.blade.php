@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="{{ route('fornecedores.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="nome" aria-describedby="nome" placeholder="nome" required>
                                    <label for="nome">nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nif" aria-describedby="nif"  placeholder="nif" required>
                                    <label for="nif">nif</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="morada" aria-describedby="morada" placeholder="morada" required>
                                    <label for="morada">morada</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cpost" aria-describedby="cpost" placeholder="cpost" required>
                                    <label for="cpost">cpost</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cp" aria-describedby="cp" placeholder="cp" required>
                                    <label for="cp">cp</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="email" required>
                                    <label for="email">email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telemovel" aria-describedby="telemovel" placeholder="telemovel" required>
                                    <label for="telemovel">telemovel</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="localidade" aria-describedby="localidade" placeholder="localidade" required>
                                    <label for="localidade">localidade</label>
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
