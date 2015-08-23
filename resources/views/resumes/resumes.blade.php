@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')

    <div class="container">
        <h1>Resumes Generated By This Site</h1>
        @if(count($users))
            @foreach($users as $user)
                <p>
            <a href="/resume/{{ $user->id }}">{{$user->f_name}} {{$user->l_name}} </a>
                </p>
            @endforeach
        @endif
    </div>
@stop