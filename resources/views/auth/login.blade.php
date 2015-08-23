@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
    <img src='/images/image_top_spread.jpg' class="img-responsive" style="min-width: 100%;"></img>
    <div class="container">
        <h2>Login</h2>
        <div class="col-lg-6">
<form method="POST" action="/auth/login" >
    {!! csrf_field() !!}

    <div class="form-group">
        Email
        <input type="email" name="email" class="form-control"  value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password" class="form-control" id="password">
    </div>

    <div class="form-group">
        <input type="checkbox" class="form-control" name="remember"> Remember Me
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>
    </div>
        <div class="col-lg-6">

        </div>
    </div>
@stop