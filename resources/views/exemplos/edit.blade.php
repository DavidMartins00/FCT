@extends('layouts/app')
@section('content')

    <link href="{{ asset('css/creedit.css') }}" rel="stylesheet">

        <section class="ready__started project__form">
            <div class="container">
                <h3 class="text-center">Editar Status</h3>
                <div class="ready__started-box">
                    <form class="main__form" action="/status/{{$var->id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="firstName" aria-describedby="firstName" value="{{$var->doc}}" placeholder="John" required>
                                    <label for="firstName">First Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastName" aria-describedby="lastName" value="{{$var->doc}}" placeholder="Doe" required>
                                    <label for="lastName">Last Name*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" aria-describedby="email" value="{{$var->doc}}" placeholder="example@xyz.com" required>
                                    <label for="email">Email*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contactNumber" aria-describedby="contactNumber" value="{{$var->doc}}" placeholder="xxx-xxx-xxxx" required>
                                    <label for="contactNumber">Contact Number*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company" aria-describedby="company" value="{{$var->doc}}" placeholder="Company Name" required>
                                    <label for="company">Company*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="webSite" aria-describedby="webSite" value="{{$var->doc}}" placeholder="http://xyz.com" required>
                                    <label for="webSite">Website*</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-message">
                            <textarea class="form-control" name="message" rows="6" value="{{$var->doc}}" placeholder="Message"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="form-groups">
                            <label class="btn-attached" for="attached_file"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</label>
                            <input style="display: none" type="file" class="form-control-file" value="{{$var->doc}}" name="attached_file">
                        </div>
                        <div class="form-groups form-check">
                            <input type="checkbox" class="form-check-input" name="checkBox">
                            <label class="form-check-label" value="{{$var->doc}}" for="checkBox">I consent to receive communications from Resourcifi and collect my submitted data. For more details, check out our Privacy Policy.</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn btn-get"><span> Submeter!</span></button></div>
                    </form>
                </div>
            </div>
        </section>

@endsection
