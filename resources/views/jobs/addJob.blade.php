@extends('master')

@section('title', 'Jobs - Portfolio')


@section('content')
    <div class="container">
        @include('errors.errors')
        {!! Form::open(array('url' => 'jobs', 'method' => 'post')) !!}
@include('jobs._form',['submitForm' => 'Add Job'])
        {!! Form::close() !!}




    </div>
@stop