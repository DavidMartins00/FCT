@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Utilizador</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/user/{{$user->id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$user->name}}" placeholder="John" required>
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{$user->email}}" placeholder="exemplo@xyz.com" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="role" id="role" style="height: 60px" >
                                        <option selected hidden value="{{$user->role}}">{{$user->role}}</option>
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
