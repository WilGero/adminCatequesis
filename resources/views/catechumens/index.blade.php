@extends('adminlte::page')

@section('title', 'Catecumenos')

@section('content_header')
    <h1>Lista de Catecumenos</h1>
@stop

@section('content')
{{$catechumens}}
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
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
                        <td>{{$catechumen->edad}}</td>
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