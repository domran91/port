<div class="control-group">

    <div class="form-group">
        {!! Form::label('skills','Skill : ') !!}
        {!! Form::text('skills', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('skills_description','Skill Description : ') !!}
        {!! Form::textarea('skills_description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($submitForm,['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>