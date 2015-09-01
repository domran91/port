@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
    <img src='/images/image_top_spread.jpg' class="img-responsive" style="min-width: 100%;"></img>
    <div class="container">
        <div class="col-lg-6">
            <h1>Create Username</h1>
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        First Name
        <input type="text" name="f_name" class="form-control" value="{{ old('f_name') }}">
    </div>
    <div class="form-group">
        Last Name
        <input type="text" name="l_name" class="form-control" value="{{ old('l_name') }}">
    </div>

    <div class="form-group">
        Email
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div>
        <button type="submit" class="btn btn-default">Register</button>
    </div>
</form>
        </div>

        <div class="col-lg-5">
           <h2>Start your Resume Today!</h2>
            <p>Creating a username will allow you to create your own resume that will be hosted by this website.</p>
        <h5>Benefits of Using Our Service</h5>
        <ul>
            <li>Save Time</li>
            <li>Information Saved Security</li>
            <ul>
                <li>Never Lose your Resume</li>
                <li>Easy to update from one location</li>
                <li>Version Control</li>
            </ul>
            <li>Get prompted for needed information.</li>
        </ul>
        </div>
    </div>
@stop