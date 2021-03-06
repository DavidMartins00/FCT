@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

    <section class="ready__started project__form">
        <div class="container">
            <h3 class="text-center">Editar Status</h3>
            <div class="ready__started-box">
                <form class="main__form" action="/status/{{$stat->id}}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="status" name="status" value="{{$stat->status}}" aria-describedby="firstName" required>
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
