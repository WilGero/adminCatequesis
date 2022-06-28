@extends('adminlte::page')

@section('title', 'Mostrar Tema')


@section('content_header')
    <h1 class="text-center">Mostrar Tema</h1>
@stop

@section('content')

{{-- Lista de catecumenos --}}


<div class="card">
    <div class="card-title text-center">Lista de Catecumenos</div>
      <div class="card-body">
        <form action="{{route('registrarAsistencia',$catechism)}}" method="get">
            @csrf
          <table class="table ">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Asistencia</th>
                </tr>
              </thead>
              <tbody>
                {{-- <tr> --}}
                      @foreach($catechumens as $catechumen)
                      <tr scope="row">
                          <td>{{$catechumen->id}}</td>
                          <td>{{$catechumen->name}}</td>
                          <td>{{$catechumen->surname}}</td>
                          <td>
                            {{-- <select name="asistencia">
                                <option value="presente">PRESENTE</option>
                                <option value="permiso">PERMISO</option>
                                <option value="falta">FALTA</option>    
                            </select> --}}
                            <input type="checkbox" class="form-control" name="">
                            
                           {{-- <a href="{{route('catechumens.show',$catechumen)}}">
                            <button type="button" class="btn btn-info">Mostrar</button>  
                          </a>  --}}
                          </td>
                          {{-- <td>  <a href="{{ route('catechumens.edit', $catechumen->id) }}" class="btn btn-primary">Editar</a>
                            <a href="{{ route('catechumens.destroy', $catechumen->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-secondary">Eliminar</a> --}}
                          </td>
                          {{-- <a href="{{route('catecumenos.show',$catecumeno->id)}}">{{$catecumeno->name}}</a>     --}}
                      </tr>
                  @endforeach   
              </tbody>
            </table>
            <div class="form-group row">
              <div class="col-md-3">
                <button type="submit" class="btn btn-success">Registrar Asistencia</button>
              </div>
              <div class="col-md-3">
                <form action="{{route('refrescar')}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-info" type="submit">Refrescar</button>
                </form>
              </div>
              <div class="col-md-3">
                <a  class="btn btn-secondary" href="{{route('catechisms.show',$catechism)}}" role="button" >Volver</a>
               </div>
            </div>
           
           
        </form>
        
            {{$catechumens->links()}}
           
      </div>
    </div>
  



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop