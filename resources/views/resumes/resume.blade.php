@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="header">
                <h1>Resume - {{ $user->f_name }} {{ $user->l_name }} </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <h3>Skills</h3>
            <ul>

                @if($user->skills)
                    @foreach($user->skills as $skill)
                        <h4><li>{{ $skill->skills }}</li></h4>
                        {{$skill->skills_description}}
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col-lg-8">
            <h3>Education</h3>
            @if($user->schools)

                @foreach($user->schools as $school_obj)
                    <h3>{{ $school_obj->school }}</h3>
                    <h5>{{ $school_obj->school_degree }}</h5>
                    <em>Start Date: </em>{{ $school_obj->started_on }} <em>End Date: </em>{{ $school_obj->ended_on }}
                    <p>{{ $school_obj->school_description }}</p>
                @endforeach

            @endif

            <h3>Jobs</h3>
            @if($user->jobs)
                @foreach($user->jobs as $job)
                    <h3>{{ $job->job }}</h3>
                    <h5>{{ $job->job_position }}</h5>
                    <p>{{ $job->job_description }}</p>
                    @foreach($job->task as $taskList)
                        <ul>
                            <li>{{ $taskList->task }}</li>
                            <ul><li>{{ $taskList->task_description }}</li></ul>
                        </ul>
                            @endforeach

                    @endforeach
                    @endif

        </div>
    </div>
@stop