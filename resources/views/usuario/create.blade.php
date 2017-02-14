@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
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
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
@stop()