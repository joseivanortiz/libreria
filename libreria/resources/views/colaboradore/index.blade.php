
@extends('layouts.template')

@section('content_header')
    <h1> COLABORADORES</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                                {{ __('INFORMACION') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('colaboradores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="colaboradores"  class="table table-striped table-hover">
                            <thead class="bg-primary text-white">
                                    <tr>
                                        
                                        <th>Foto</th>
										<th>Nombre</th>
										<th>Cargo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colaboradores as $colaboradore)
                                        <tr>
                                     
                                            <td>                                                
                                            <img src="{{ asset('storage').'/'.$colaboradore->foto }}" width="250" heigth="250" alt="">                                      
                                            </td>
                                     


											<td>{{ $colaboradore->nombre }}</td>

                                           


											<td>{{ $colaboradore->cargo }}</td>
                                            
                                            <td>
                                                <form action="{{ route('colaboradores.destroy',$colaboradore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('colaboradores.show',$colaboradore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('colaboradores.edit',$colaboradore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"  rel="stylesheet">

<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"  rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

                            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>



                            <script>
                                $(document).ready(function () {
                                    $('#colaboradores').DataTable();
                                });

                            </script>



@stop