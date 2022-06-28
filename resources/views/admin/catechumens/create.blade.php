@extends('adminlte::page')

@section('title', 'Registrar Catecumeno')


@section('content_header')
    <h1 class="text-center">Registrar Catecumeno</h1>
@stop

@section('content')
<div class="card">
   <div class="card-body">
      {!! Form::open(['route'=>'catechumens.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombres') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del catecúmeno']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('surname', 'Apellidos') !!}
          {!! Form::text('surname', null, ['class'=>'form-control','placeholder'=>'Ingrese el apellido del catecúmeno']) !!}
      </div>

      {!! Form::close() !!}
   </div>
</div>




{{-- <div class="card container">
    <div class="card-body">
      <h5 class="card-title"></h5>
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
                <input type="tel" class="form-control" name="phone" >
            </div>


              <div class="mb-3">
                <label  class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birth">
              </div>
             

              <div class="mb-3">
                <label  class="form-label">Bautismo</label>
                <select name="baptism" class="form-control">
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
              </div>

              <div class="mb-3">
                <label  class="form-label">Primera Comunión</label>
                <select name="communion" class="form-control">
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
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
  </div> --}}

@stop

