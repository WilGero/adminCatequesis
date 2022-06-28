@extends('adminlte::page')

@section('title', 'Mostrar Tema')


@section('content_header')
    <h1 class="text-center">Mostrar Tema</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header "> </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
                        <div class="col-md-6">
                            <label class="form-control">{{$catechism->id }}</label>
                        </div>
                    </div>
                    
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{$catechism->title }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{$catechism->date }}</label>
                            </div>
                        </div>
                    
                        
                        <div class="form-group row">
                            <div class="col-md-3">
                                <a class="btn btn-success" href="{{route('asistencias',$catechism)}}" role="button">Asistencia</a>
                            </div> 

                            <div class="col-md-3">
                                <a class="btn btn-primary" href="{{route('catechisms.edit',$catechism)}}" role="button">Editar</a>
                            </div> 

                            <div class="col-md-3">
                                <form action="{{route('catechisms.destroy',$catechism)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿Seguro que deseas eliminarlo?')" type="submit" class="btn btn-danger">
                                         Eliminar
                                    </button>
                                </form>
                            </div>

                            <div class="col-md-3">
                                <a  class="btn btn-secondary" href="{{route('catechisms.index')}}" role="button" >Cancelar</a>
                            </div>
                        </div>    

                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop