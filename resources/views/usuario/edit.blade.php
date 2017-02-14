@extends('layouts.admin')
	@section('content')
		<div class="jumbotron">
			<center><h3>Actualizacion de Informacion</h3></center>
		</div>
	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
		<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('E-mail:')!!}
			{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'example@exam.com'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Password:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingres Passwor'])!!}
		</div>
	{!!Form::submit('Actualiza',['class'=>'btn btn-warning form-control'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger form-control'])!!}
	{!!Form::close()!!}
	@stop()