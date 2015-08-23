<div class="control-group">

    <div class="form-group">
        {!! Form::label('job','Company : ') !!}
        {!! Form::text('job', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('job_position','Job Title : ') !!}
        {!! Form::text('job_position', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('job_description','Job Description : ') !!}
        {!! Form::textarea('job_description', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('started_on','Job Title : ') !!}
        {!! Form::date('started_on', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('ended_on','Job Title : ') !!}
        {!! Form::date('ended_on', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit($submitForm,['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>