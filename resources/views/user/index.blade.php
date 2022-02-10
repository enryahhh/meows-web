@extends('layouts.user-app')
@section('content')
<div class="row">
    <div class="col">
        <div class="container">
            <h1 class="text-center my-3">MEOWS</h1>
            <img class="mx-auto d-block my-5" src="{{ asset('img/splash.png') }}" width="250px" alt="">
        </div>
    </div>
</div>
{{-- end row gambar --}}
<div class="container">
    <div class="row text-center">
        <div class="col-8 offset-2">
            <a href="{{ url('user-login') }}" type="button" class="btn btn-warning btn-block btn-login">Login</a>
        </div>
        <div class="col-12 mt-3">
            <p><a href="{{ url('user-register') }}" class="btn-register">Register</a></p>
        </div>
    </div>
</div>
@endsection
