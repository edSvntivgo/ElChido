@extends('layouts.admin')
@section('content')
	@include('alerts.request')
	@include('alerts.success')
	{!!Form::open(['route'=>'movie.store','method'=>'POST'])!!}
		<div class="form-group">
			{!!Form::label('Nombre De La Pelicula:')!!}
			{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Transformers','autofocus'=>'true'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Duracion:')!!}
			{!!Form::text('cast',null,['class'=>'form-control','placeholder'=>'1:30 minutos'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Director:')!!}
			{!!Form::text('direction',null,['class'=>'form-control','placeholder'=>'Rober JK'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Direccion de Imagen:')!!}
			{!!Form::text('path',null,['class'=>'form-control','placeholder'=>'images/nombre de la imaggen.jpg'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Url Video Clip:')!!}
			{!!Form::text('video',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}
	{!!Form::close()!!}
@stop()