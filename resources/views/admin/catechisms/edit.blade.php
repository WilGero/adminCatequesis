@extends('adminlte::page')

@section('title', 'Editar Tema')


@section('content_header')
    <h1 class="text-center">Editar Tema</h1>
@stop

@section('content')
<div class="container card">
    <div class="card-body container">
        <h5 class="card-title"></h5>
      <p class="card-text container">
        <form action="{{route('catechisms.update',$catechism)}}" class="container" method='post'>
            @csrf
            @method('put')
            <div class="mb-3">
                <label  class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="{{$catechism->id}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{$catechism->title}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">Fecha</label>
                <input type="date" class="form-control" name="date" value="{{$catechism->date}}">
              </div>
  
             
              <div class="form-group row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div> 


                <div class="col-md-3">
                    <a  class="btn btn-secondary" href="{{route('catechisms.show',$catechism)}}" role="button" >Cancelar</a>
                </div>
            </div>   
        </form>
      </p>
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop