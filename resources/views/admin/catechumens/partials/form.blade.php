<div class="form-group">
  {!! Form::label('name', 'Nombres') !!}
  {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del catecúmeno']) !!}

  @error('name')
    <span class="text-danger">{{$message}}</span>
  @enderror
</div>

<div class="form-group">
{!! Form::label('surname', 'Apellidos') !!}
{!! Form::text('surname', null, ['class'=>'form-control','placeholder'=>'Ingrese el apellido del catecúmeno']) !!}
@error('surname')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
{!! Form::label('ci', 'CI') !!}
{!! Form::number('ci', null, ['class'=>'form-control','placeholder'=>'Ingrese el Carnet de Identidad del catecúmeno']) !!}
@error('ci')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
{!! Form::label('phone', 'Celular') !!}
{!! Form::number('phone', null, ['class'=>'form-control','placeholder'=>'Ingrese el número de Celular del catecúmeno']) !!}
@error('phone')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group row" >
{!! Form::label('birth', 'Fecha de nacimento') !!}
{!! Form::date('birth', null, ['class'=>'form-control']) !!}
@error('birth')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
