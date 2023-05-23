@extends('layouts.template')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">vista colaboradore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('colaboradores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $colaboradore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $colaboradore->cargo }}
                        </div>
                       
                        <td>                                                
                        <img src="{{ asset('storage').'/'.$colaboradore->foto }}" width="250" heigth="250" alt="">                                      
                         </td>             
                       

                    

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
