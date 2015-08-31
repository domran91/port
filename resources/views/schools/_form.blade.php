<div class="control-group">

    <div class="form-group">
        {!! Form::label('school','School : ') !!}
        {!! Form::text('school', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('school_degree','School Degree : ') !!}
        {!! Form::text('school_degree', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('school_description','School Description : ') !!}
        {!! Form::textarea('school_description', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('started_on','School Start Date : ') !!}
        {!! Form::date('started_on', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('ended_on','School End Date : ') !!}
        {!! Form::date('ended_on', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit($submitForm,['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>