@extends('layouts.app')

@section('template_title')
    {{ $publicacion->name ?? 'Show Publicacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Publicacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('publicacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $publicacion->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Texto:</strong>
                            {{ $publicacion->texto }}
                        </div>


                        <td>                                                
                        <img src="{{ asset('storage').'/'.$publicacion->foto }}" width="250" heigth="250" alt="">                                      
                         </td>  


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
