@extends('layouts/app')
@section('content')
        <div style="text-align: center;">
                <img src="{{$var->img}}">
                <h3>Nome: {{$var->nome}}</h3>
                <h5>Preço: {{$var->preco}}</h5>
                <p>Descrição:</p>
                <p>{{$var->desc}}</p>
                <div class="row">
                    <div class="col">
                        <a href="/" style="margin:1px" class="btn btn-outline-dark">Voltar</a>
                    </div>
                </div>
        </div>
@endsection
