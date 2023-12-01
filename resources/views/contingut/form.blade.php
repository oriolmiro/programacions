<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contingut') }}
            {{ Form::text('contingut', $contingut->contingut, ['class' => 'form-control' . ($errors->has('contingut') ? ' is-invalid' : ''), 'placeholder' => 'Contingut']) }}
            {!! $errors->first('contingut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ra_id') }}
            {{ Form::text('ra_id', $contingut->ra_id, ['class' => 'form-control' . ($errors->has('ra_id') ? ' is-invalid' : ''), 'placeholder' => 'Ra Id']) }}
            {!! $errors->first('ra_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>