@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

    <section class="ready__started project__form">
        <div class="container">
            <h3 class="text-center">Criar Status</h3>
            <div class="ready__started-box">
                <form class="main__form" action="{{ route('status.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="status" name="status" placeholder="Concluido" aria-describedby="firstName" required>
                                <label for="firstName">Status</label>
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
