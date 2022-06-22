@extends('adminlte::page')

@section('title', 'Registrar Catecumeno')


@section('content_header')
    <h1>Registrar Catecumeno</h1>
@stop

@section('content')
<div class="card container">
    <div class="card-body">
      <h5 class="card-title">Datos:</h5>
      <p class="card-text">
        <form action="{{route('catechumens.store')}}" method='post'>
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="name" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="surname" >
            </div>

            <div class="mb-3">
                <label  class="form-label">CI</label>
                <input type="text" class="form-control" name="ci" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Celular</label>
                <input type="text" class="form-control" name="phone" >
            </div>


              <div class="mb-3">
                <label  class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birth">
              </div>
             

              <div class="form-group row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div> 


                <div class="col-md-3">
                    <a  class="btn btn-secondary" href="{{route('catechumens.index')}}" role="button" >Cancelar</a>
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