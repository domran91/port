@extends('master')

@section('title', 'Edit Skills - Portfolio')
@section('content')
    <div class="container">
        <h2>Edit Skill {{$skill->skill}}</h2>
        @include('errors.errors')
        {!! Form::model($skill, array('url' => 'skills/'.$skill->id, 'method' => 'patch')) !!}

        @include('skills._form',['submitForm' => 'Update Skill'])

        {!! Form::close() !!}




    </div>
@stop