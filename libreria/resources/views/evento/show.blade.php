@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                         <td>                                                
                         <img src="{{ asset('storage').'/'.$evento->foto }}" width="250" heigth="250" alt="">                                      
                         </td>   
                        
                        <div class="form-group">
                            <strong>Evento:</strong>
                            {{ $evento->evento }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $evento->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $evento->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $evento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $evento->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
