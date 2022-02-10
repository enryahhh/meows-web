@extends('layouts.user-app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-login">Sign Up</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="nama" class="form-control" id="exampleFormControlInput1">
              </div>
            <div class="form-group">
                <label for="formGroupExampleInput">E-Mail</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Confirm Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
            <div class="form-group text-right">
                <a href="{{route('password.request')}}">Lupa Password</a>
            </div>
        </form>
    </div>
    <div class="col-8 offset-2">
        <a href="{{ url('homepage') }}" type="button" class="btn btn-warning btn-block btn-login">Register</a>
    </div>
</div>
<div class="container h-100">
    <div class="row">
        <div class="col align-self-end">
            <p class="text-center">Already have an account? <span><a href="{{ url('user-login') }}">Login</a></span></p>
        </div>
    </div>
</div>
@endsection