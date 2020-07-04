@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Utilizador</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/user/{{$var->id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$var->name}}" placeholder="John" required>
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{$var->email}}" placeholder="exemplo@xyz.com" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefone" aria-describedby="telefone" value="{{$var->telefone}}" placeholder="telefone" required>
                                    <label for="telefone">telefone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nif" aria-describedby="nif" value="{{$var->nif}}" placeholder="nif" required>
                                    <label for="nif">nif</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="localidade" aria-describedby="localidade" value="{{$var->localidade}}" placeholder="localidade" required>
                                    <label for="localidade">localidade</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="morada" aria-describedby="morada" value="{{$var->morada}}" placeholder="morada" required>
                                    <label for="morada">morada</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="codpost" aria-describedby="codpost" value="{{$var->codpost}}" placeholder="codpost" required>
                                    <label for="codpost">codpost</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="role" id="role" style="height: 60px" >
                                        <option selected hidden value="{{$var->role}}">{{$var->role}}</option>
                                        <option value="Cliente">Cliente</option>
                                        <option value="Funcionario">Funcionario</option>
                                        <option value="Gerente">Gerente</option>

                                     </select>
                                     <label for="role">Cargo</label>
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
