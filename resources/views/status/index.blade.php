@extends('layouts/app')
@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <a class='btn btn-info btn-xs' href="/status/create">Novo</a>
    <div class="container">

        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>

                    <th class="text-center">Action</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>
@endsection
