@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Ra
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Ra</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ra.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
