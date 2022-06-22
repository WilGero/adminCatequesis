@extends('adminlte::page')

@section('title', 'Catecumenos')


@section('content_header')
    <h1>Lista de Catecumenos</h1>
@stop

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
      <a href="{{route('catechumens.create')}}"><button class="btn btn-success m-4" type="submit">Registrar Catecumeno</button></a>
    </div>
  </div>
</nav>


{{-- Lista de catecumenos --}}


<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">ci</th>
                <th scope="col">Edad</th>
              </tr>
            </thead>
            <tbody>
              {{-- <tr> --}}
                    @foreach($catechumens as $catechumen)
                    <tr scope="row">
                        <td>{{$catechumen->id}}</td>
                        <td>{{$catechumen->name}}</td>
                        <td>{{$catechumen->surname}}</td>
                        <td>{{$catechumen->ci}}</td>
                        <td>{{$catechumen->edad}}</td>
                        <td>
                         <a href="{{route('catechumens.show',$catechumen)}}">
                          <button type="button" class="btn btn-info">Mostrar</button>  
                        </a> 
                        </td>
                        {{-- <td>  <a href="{{ route('catechumens.edit', $catechumen->id) }}" class="btn btn-primary">Editar</a>
                          <a href="{{ route('catechumens.destroy', $catechumen->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-secondary">Eliminar</a> --}}
                        </td>
                        {{-- <a href="{{route('catecumenos.show',$catecumeno->id)}}">{{$catecumeno->name}}</a>     --}}
                    </tr>
                @endforeach
              
            </tbody>
          </table>
         
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop