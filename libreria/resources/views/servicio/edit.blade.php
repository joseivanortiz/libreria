@extends('layouts.template')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Servicio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('servicios.update', $servicio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('servicio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
