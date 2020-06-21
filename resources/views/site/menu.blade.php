@extends('layouts/app')
@section('content')
    <h1 style="text-align: center">Bem vindo, {{Auth::user()->role}} {{Auth::user()->name}}! </h1>
    <div>
    <center>
    <a href="user">user</a>
    <br><br>
    <a href="fornecedores">fornecedores</a><br><br>
    <a href="contrato">contrato</a><br><br>
    <a href="cliente">cliente</a><br><br>
    <a href="produto">produto</a><br><br>
    <a href="operadora">operadora</a><br><br>
    <a href="reparacoes">reparacoes</a><br><br>
    <a href="substituto">substituto</a><br><br>
    <a href="status">status</a><br><br>
    <a href="intervencao">intervencao</a><br><br>
    <a href="nencomenda">nencomenda</a><br><br>
    <a href="pencomenda">pencomenda</a><br><br>
    <a href="repext">repext</a><br><br>
    </center>
    </div>
@endsection
