@extends('master')

@section('title', 'Skills - Portfolio')


@section('content')
    <div class="container">
        @include('errors.errors')
        <h1>Add Skill</h1>
        {!! Form::open(array('url' => 'skills', 'method' => 'post')) !!}
        @include('skills._form',['submitForm' => 'Add Skill'])
        {!! Form::close() !!}




    </div>
@stop