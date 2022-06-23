@extends('adminlte::page')

@section('title', 'Catecumenos')

@section('content_header')
    <h1>Catequesis - Confirmación</h1>
@stop

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-6  container">
                 {{-- CARD CATECUMENOS --}}
                <div class="card container " style="width: 18rem;">
                    <img src="vendor/adminlte/dist/img/catecumenos2.jpg" class="card-img-top  img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">GESTIONAR CATECÚMENO</h5>
                      <p class="card-text"></p>
                      <a href="{{route('catechumens.index')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
            </div>
            <div class="col-6 ">
                {{-- CARD CATEQUESIS--}}
                <div class="card container" style="width: 18rem; m;">
                    <img src="vendor/adminlte/dist/img/catequesis6.jpg" class=" card-img-top  img-fluid"  alt="...">
                    <div class="card-body">
                      <h5 class="card-title">GESTIONAR CATEQUESIS</h5>
                      <p class="card-text"></p>
                      <a href="{{route('catechumens.index')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                {{-- CARD INFORME--}}
                <div class="card container" style="width: 18rem;">
                    <img src="vendor/adminlte/dist/img/informes2.png" class="card-img-top  img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">INFORME DE LOS CATECÚMENOS</h5>
                      <p class="card-text"></p>
                      <a href="{{route('catechumens.index')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
            </div>
            <div class="col-6">
                 {{-- CARD USUARIOS--}}
                 <div class="card container" style="width: 18rem;">
                    <img src="vendor/adminlte/dist/img/usuarios.png" class="card-img-top  img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">GESTIONAR USUARIOS</h5>
                      <p class="card-text"></p>
                      <a href="{{route('catechumens.index')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
            </div>
        </div>
        
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop