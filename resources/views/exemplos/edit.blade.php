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
                                    <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="John" required>
                                    <label for="firstName">First Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Doe" required>
                                    <label for="lastName">Last Name*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="example@xyz.com" required>
                                    <label for="email">Email*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contactNumber" aria-describedby="contactNumber" placeholder="xxx-xxx-xxxx" required>
                                    <label for="contactNumber">Contact Number*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="company" aria-describedby="company" placeholder="Company Name" required>
                                    <label for="company">Company*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="webSite" aria-describedby="webSite" placeholder="http://xyz.com" required>
                                    <label for="webSite">Website*</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-message">
                            <textarea class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="form-groups">
                            <label class="btn-attached" for="attached_file"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</label>
                            <input style="display: none" type="file" class="form-control-file" id="attached_file">
                        </div>
                        <div class="form-groups form-check">
                            <input type="checkbox" class="form-check-input" id="checkBox">
                            <label class="form-check-label" for="checkBox">I consent to receive communications from Resourcifi and collect my submitted data. For more details, check out our Privacy Policy.</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submit Now!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
