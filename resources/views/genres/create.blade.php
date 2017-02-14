@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'genero.store','method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('Genero:')!!}
		{!!Form::text('genre',null,['class'=>'form-control','placeholder'=>'Accion','autofocus'=>'true'])!!}
	</div>
		{!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}
{!!Form::close()!!}
@endsection()