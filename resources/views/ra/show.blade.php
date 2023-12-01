@extends('layouts.app')

@section('template_title')
    {{ $ra->name ?? "{{ __('Show') Ra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $ra->name }}
                        </div>
                        <div class="form-group">
                            <strong>Uf Id:</strong>
                            {{ $ra->uf_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
