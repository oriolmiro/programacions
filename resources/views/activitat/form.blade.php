<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $activitat->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $activitat->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programacion_id') }}
            {{ Form::text('programacion_id', $activitat->programacion_id, ['class' => 'form-control' . ($errors->has('programacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Programacion Id']) }}
            {!! $errors->first('programacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_id') }}
            {{ Form::text('uf_id', $activitat->uf_id, ['class' => 'form-control' . ($errors->has('uf_id') ? ' is-invalid' : ''), 'placeholder' => 'Uf Id']) }}
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ra_ids') }}
            {{ Form::text('ra_ids', $activitat->ra_ids, ['class' => 'form-control' . ($errors->has('ra_ids') ? ' is-invalid' : ''), 'placeholder' => 'Ra Ids']) }}
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criteri_ids') }}
            {{ Form::text('criteri_ids', $activitat->criteri_ids, ['class' => 'form-control' . ($errors->has('criteri_ids') ? ' is-invalid' : ''), 'placeholder' => 'Criteri Ids']) }}
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contingut_ids') }}
            {{ Form::text('contingut_ids', $activitat->contingut_ids, ['class' => 'form-control' . ($errors->has('contingut_ids') ? ' is-invalid' : ''), 'placeholder' => 'Contingut Ids']) }}
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>