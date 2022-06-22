@extends('adminlte::page')

@section('title', 'Mostrar Catecumeno')


@section('content_header')
    <h1>Lista de Catecumenos</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header "><strong> Datos Personales de:  {{$catechumen->name}}</div></strong> 
                
                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{$catechumen->name }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{$catechumen->surname }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">{{ __('CI') }}</label>
                            <div class="col-md-3">
                                <label class="form-control">{{ $catechumen->ci }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{ $catechumen->birth }}</label>
                            </div>
                        </div>

                    

                      

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                            <div class="col-md-3">
                                <label class="form-control"></label>
                            </div>
                        </div>

                     

                        
                        <div class="form-group row">
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="{{route('catechumens.edit',$catechumen)}}" role="button">Editar</a>
                            </div> 

                            <div class="col-md-3">
                                <form action="{{route('catechumens.destroy',$catechumen)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿Seguro que deseas eliminarlo?')" type="submit" class="btn btn-danger">
                                         Eliminar
                                    </button>
                                </form>
                            </div>

                            <div class="col-md-3">
                                <a  class="btn btn-secondary" href="{{route('catechumens.index')}}" role="button" >Cancelar</a>
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