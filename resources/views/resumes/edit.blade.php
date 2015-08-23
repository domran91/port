@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Resume Builder</h1>
        <p>Currently you can only and and edit jobs.</p>
    </div>
<div class="col-lg-4">

    <h2>Add to Profile</h2>
    <ul>
        <li><a href="/jobs/create">Add Job</a></li>
        <li>Add School</li>
        <li>Add Skill</li>
    </ul>



</div>
    @if($jobs)
        <div class="col-lg-4">
        <h2>Edit Jobs</h2>
        <ul>
            @foreach($jobs as $job)
                <li>{{ $job->job }} - <a href="/jobs/{{$job->id }}/edit">Edit</a> - Delete</li>
            @endforeach
        </ul>
        </div>
    @else
        <div class="col-lg-4">
            <h2>You currently have no jobs</h2>
        </div>
    @endif
</div>
@stop
