@extends('layouts.master')
@section('title','Register')
@section('content')

    <div id="social" class="content-block">
        <div class="container text-center">
            @include('errors.error')
            <form class="form-group" method="POST" action="{{route('user.register')}}">
                {{csrf_field()}}

                <input class="form-control" type="text" name="username" placeholder="Username">
                <input class="form-control" type="text" name="full_name" placeholder="Full Name">
                <input class="form-control" type="email" name="email" placeholder="Email">
                <input class="form-control" type="number" name="number" placeholder="Phone Number">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <input class="btn btn-success" type="submit" value="Register">


            </form>
        </div>
    </div>

@endsection

