@extends('adminlte::page')

@section('title', 'Editar Catecumeno')


@section('content_header')
    <h1 class="text-center">Editar catecumeno</h1>
@stop

@section('content')
<div class="container card">
    <div class="card-body container">
        <h5 class="card-title"></h5>
      <p class="card-text container">
        <form action="{{route('catechumens.update',$catechumen)}}" class="container" method='post'>
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
                <label  class="form-label">Celular</label>
                <input type="text" class="form-control" name="phone" value="{{$catechumen->phone}}">
            </div>

              <div class="mb-3">
                <label  class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birth" value="{{$catechumen->birth}}">
              </div>

              <div class="mb-3">
                <label  class="form-label">Bautismo</label>
                <select name="baptism" class="form-control" value>
                @if ($catechumen->baptism=="si")
                  <option selected value="si">SI</option>
                  <option  value="no">NO</option>
                @else
                  <option value="si">SI</option>
                  <option selected value="no">NO</option>
                @endif  
                    
                </select>
              </div>

              <div class="mb-3">
                <label  class="form-label">Primera Comunión</label>
                <select name="communion" class="form-control">
                @if ($catechumen->communion=="si")
                  <option selected value="si">SI</option>
                  <option  value="no">NO</option>
                @else
                  <option value="si">SI</option>
                  <option selected value="no">NO</option>
                @endif  
                </select>
              </div>
             
              <div class="form-group row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div> 


                <div class="col-md-3">
                    <a  class="btn btn-secondary" href="{{route('catechumens.show',$catechumen)}}" role="button" >Cancelar</a>
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