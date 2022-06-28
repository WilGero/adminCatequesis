<div class="form-group">
    {!! Form::label('id', 'ID') !!}
    {!! Form::number('id', null, ['class'=>'form-control','placeholder'=>'Ingrese el id de la catequesis']) !!}
    @error('id')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
  {!! Form::label('title', 'Título del tema') !!}
  {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del tema']) !!}
  @error('title')
  <span class="text-danger">{{$message}}</span>
  @enderror
</div>

<div class="form-group">
{!! Form::label('date', 'Fecha') !!}
{!! Form::date('date', null, ['class'=>'form-control','placeholder'=>'Ingrese la fecha de la catequesis']) !!}
@error('date')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
