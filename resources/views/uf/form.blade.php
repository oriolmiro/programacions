<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $uf->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hours') }}
            {{ Form::text('hours', $uf->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hours']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="modul_id">Modul</label>
            <select class="form-control" name="modul_id" id="modul_id">
                @foreach (\App\Models\Modul::all() as $modul)
                    <option value="{{ $modul->id }}" {{ $modul->id == $uf->modul_id ? 'selected' : '' }}>{{ $modul->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>