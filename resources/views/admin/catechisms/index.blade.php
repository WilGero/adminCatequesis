@extends('adminlte::page')

@section('title', 'Catequesis')


@section('content_header')
    <h1 class="text-center">¡ BIENVENIDO A GESTIONAR CATEQUESIS !</h1>
@stop

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form action="{{route('catechisms.index')}}" class="d-flex" method="get">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="texto" value="{{$texto}}">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
      <a href="{{route('catechisms.create')}}"><button class="btn btn-success m-4" type="submit">Añadir tema</button></a>
    </div>
  </div>
</nav>


{{-- Lista de catequesis --}}


<div class="card">
  <div class="card-title text-center">Temas para la catequesis</div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
              </tr>
            </thead>
            <tbody>
              {{-- <tr> --}}
                    @foreach($catechisms as $catechism)
                    <tr scope="row">
                        <td>{{$catechism->id}}</td>
                        <td>{{$catechism->title}}</td>
                        <td>
                         <a href="{{route('catechisms.show',$catechism)}}">
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
          {{$catechisms->links()}}
         
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop