@extends('layouts.app')

@section('template_title')
    {{ $activitat->name ?? "{{ __('Show') Activitat" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Activitat</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activitats.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $activitat->title }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcio:</strong>
                            {{ $activitat->descripcio }}
                        </div>
                        <div class="form-group">
                            <strong>Programacion Id:</strong>
                            {{ $activitat->programacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Uf Id:</strong>
                            {{ $activitat->uf_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ra Ids:</strong>
                            {{ $activitat->ra_ids }}
                        </div>
                        <div class="form-group">
                            <strong>Criteri Ids:</strong>
                            {{ $activitat->criteri_ids }}
                        </div>
                        <div class="form-group">
                            <strong>Contingut Ids:</strong>
                            {{ $activitat->contingut_ids }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
