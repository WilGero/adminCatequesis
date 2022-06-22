@extends('adminlte::page')

@section('title', 'Editar Catecumeno')


@section('content_header')
    <h1>Lista de Catecumenos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
      Catecumeno
    </div>
    <div class="card-body">
      <h5 class="card-title">Editar Catecumeno</h5>
      <p class="card-text">
        <form action="{{route('catechumens.update',$catechumen)}}" method='post'>
            @csrf
            @method('put')
            <div class="mb-3">
                <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="name" value="{{$catechumen->name}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="surname" value="{{$catechumen->surname}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">CI</label>
                <input type="text" class="form-control" name="ci" value="{{$catechumen->ci}}">
            </div>


              <div class="mb-3">
                <label  class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birth" value="{{$catechumen->birth}}">
              </div>
             
              <button type="submit" class="btn btn-success">Actualizar</button>
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