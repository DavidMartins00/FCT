@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Criar Nota Encomenda</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="{{ route('nencomenda.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="data" id="data" aria-describedby="data" placeholder="data" required>
                                    <label for="data">data</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="idCliente" id="idCliente" style="height: 60px" >
                                        @foreach ($cli as $i)
                                            <option value="{{$i->id}}">{{$i->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Cliente</label>
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
