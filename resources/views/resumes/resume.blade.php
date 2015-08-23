@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')
<div class="container">
 <div class="col-lg-12">
     <div class="header">
         <h1>Resume - @foreach ($users as $user) {{ $user->f_name }} {{ $user->l_name }} @endforeach</h1>
     </div>
 </div>
<div class="col-lg-4">
    <h3>Skills</h3>
    <ul>

        @if(count($skills))
        @foreach($skills as $skill)
        <h4><li>{{ $skill->skills }}</li></h4>
            {{$skill->skills_description}}
        @endforeach
        @endif
    </ul>
</div>
    <div class="col-lg-8">
        <h1>Education</h1>
        @if(count($school))

                @foreach($school as $school_obj)
                <h3>{{ $school_obj->school }}</h3>
                <h5>{{ $school_obj->school_degree }}</h5>
            <em>Start Date: </em>{{ $school_obj->started_on }} <em>End Date: </em>{{ $school_obj->ended_on }}
                    <p>{{ $school_obj->school_description }}</p>
                @endforeach

        @endif

        <h1>Jobs</h1>
        @if(count($jobs))

                @foreach($jobs as $job)
                <h3>{{ $job->job }}</h3>
                <h5>{{ $job->job_position }}</h5>
            <p>{{ $job->job_description }}</p>
                @if($tasks)
                    <ul>
                @foreach($tasks as $task)
                        <li>{{ $task->task }}</li>
                    <ul><li>{{ $task->task_description }}</li></ul>
                    @endforeach
                    </ul>
                 @endif
                @endforeach
        @endif

    </div>
</div>
@stop