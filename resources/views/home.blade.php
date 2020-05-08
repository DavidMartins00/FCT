@extends('layouts.app')
@section('content')
<div class="container">
    <center>
    <h1 style="color: red"> <b>Pagina de testes</b></h1><br>
    </center>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <p>Nome: {{Auth::user()->name}}</p>
                <p>Email: {{Auth::user()->email}}</p>
                <p>Id: {{Auth::user()->id}}</p>
                <p>Cargo: {{Auth::user()->role}}</p>
                <div class1="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
    <center>
        <h1 style="color: red"> <b>Pagina de testes</b></h1><br>
    </center>
</div>
@endsection
