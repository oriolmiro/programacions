@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Uf
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Uf</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ufs.update', $uf->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('uf.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
