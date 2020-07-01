@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/cliente/{{$var->id}}" method="post">
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
                                    <input type="text" class="form-control" name="telefone" aria-describedby="telefone" value="{{$var->telefone}}" placeholder="telefone" required>
                                    <label for="telefone">telefone</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nif" aria-describedby="nif" value="{{$var->nif}}" placeholder="nif" required>
                                    <label for="nif">nif</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="localidade" aria-describedby="localidade" value="{{$var->localidade}}" placeholder="localidade" required>
                                    <label for="localidade">localidade</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="morada" aria-describedby="morada" value="{{$var->morada}}" placeholder="morada" required>
                                    <label for="morada">morada</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="codpost" aria-describedby="codpost" value="{{$var->codpost}}" placeholder="codpost" required>
                                    <label for="codpost">codpost</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="user_id" id="user_id" style="height: 60px" >
                                        @foreach ($users as $var)
                                            <option value="{{$var->id}}">{{$var->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">User</label>
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
