@extends('layouts.admin')
	@section('content')
		<div class="jumbotron">
			
			<center><h3>Estas Actualizando a {{$movie->nombre}}</h3></center>
			
		</div>
{!!Form::model($movie,['route'=>['movie.update',$movie->id],'method'=>'PUT'])!!}
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
		{!!Form::submit('Actualiza',['class'=>'btn btn-warning form-control'])!!}
{!!Form::close()!!}
{!!Form::open(['route'=>['movie.destroy',$movie->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger form-control'])!!}
	{!!Form::close()!!}
@stop()