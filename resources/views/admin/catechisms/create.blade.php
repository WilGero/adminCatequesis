@extends('adminlte::page')

@section('title', 'Registrar Catecumeno')


@section('content_header')
    <h1 class="text-center">Nueva Catequesis</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
     {!! Form::open(['route'=>'catechisms.store']) !!}
     
     @include('admin.catechisms.partials.form')
       
     <div class="form-group row" >
       <div class="col-md-3">
        {!! Form::submit('Registrar', ['class'=>'btn btn-success']) !!}
       </div>
        <div class="col-md-3">
         <a  class="btn btn-secondary" href="{{route('catechisms.index')}}" role="button" >Cancelar</a>
        </div>
     </div>
     {!! Form::close() !!}
  </div>
</div>
{{-- <div class="card container">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
        <form action="{{route('catechisms.store')}}" method='post'>
            @csrf
                     
            <div class="mb-3">
              <label  class="form-label">ID</label>
              <input type="text" class="form-control" name="id" >
          </div>

            <div class="mb-3">
                <label  class="form-label">Titulo del tema</label>
                <input type="text" class="form-control" name="title" >
            </div>

            <div class="mb-3">
              <label  class="form-label">Fecha</label>
              <input type="date" class="form-control" name="date" >
            </div>

              <div class="form-group row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Añadir</button>
                </div> 


                <div class="col-md-3">
                    <a  class="btn btn-secondary" href="{{route('catechisms.index')}}" role="button" >Cancelar</a>
                </div>
            </div>    
        </form>
      </p>
    </div>
  </div> --}}

@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}