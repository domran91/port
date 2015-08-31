@extends('master')

@section('title', 'Schools - Portfolio')


@section('content')
    <div class="container">
        @include('errors.errors')
        {!! Form::open(array('url' => 'schools', 'method' => 'post')) !!}
        @include('schools._form',['submitForm' => 'Add School'])
        {!! Form::close() !!}




    </div>
@stop