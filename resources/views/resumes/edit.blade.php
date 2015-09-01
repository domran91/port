@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Resume Builder</h1>
        <h3>Start building you resume now!</h3>
    </div>
<div class="col-lg-4">

    <h2>Add to Profile</h2>
    <ul>
        <li><a href="/jobs/create">Add Job</a></li>
        <li><a href="/schools/create">Add School</a></li>
        <li><a href="/skills/create">Add Skill</a></li>
    </ul>



</div>
    @if($user->jobs)
        <div class="col-lg-4">
        <h2>Edit Jobs</h2>
        <ul>
            @foreach($user->jobs as $job)
                <li>{{ $job->job }} - <a href="/jobs/{{$job->id }}/edit">Edit</a> - Delete</li>
            @endforeach
        </ul>
        </div>
    @endif

    @if($user->schools)
        <div class="col-lg-4">
            <h2>Edit Schools</h2>
            <ul>
                @foreach($user->schools as $school)
                    <li>{{ $school->school }} - <a href="/schools/{{$school->id }}/edit">Edit</a> - Delete</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($user->skills)
        <div class="col-lg-4">
            <h2>Edit Skills</h2>
            <ul>
                @foreach($user->skills as $skill)
                    <li>{{ $skill->skills }} - <a href="/skills/{{$skill->id }}/edit">Edit</a> - Delete</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
@stop
