@extends('master')

@section('title', 'Edit School - Portfolio')
@section('content')
    <div class="container">
        <h2>Edit Job {{$school->school}}</h2>
        @include('errors.errors')
        {!! Form::model($school, array('url' => 'schools/'.$school->id, 'method' => 'patch')) !!}

        @include('schools._form',['submitForm' => 'Update School'])

        {!! Form::close() !!}




    </div>
@stop