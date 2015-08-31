@extends('master')

@section('title', 'Edit Job - Portfolio')
@section('content')
    <div class="container">
        <h2>Edit Job {{$job->job}}</h2>
        @include('errors.errors')
        {!! Form::model($job, array('url' => 'jobs/'.$job->id, 'method' => 'patch')) !!}

        @include('jobs._form',['submitForm' => 'Update Job'])

        {!! Form::close() !!}




    </div>
@stop