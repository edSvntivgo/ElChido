@extends('layouts.admin')
	@section('content')
	@include('alerts.success')
	<table class="table table-hover">
		<thead>
				<center><th>Nombre</th></center>
				<center><th>Correo</th></center>
				<center><th>Operaciones</th></center>
		</thead>
		<tbody>
			@foreach($users as $user)
			<td>{{$user->name}}</td>
			<th>{{$user->email}}</th>
			<th>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-warning form-control'])!!}</th>
		</tbody>
		@endforeach
	</table>
	<center>{!! $users->render()!!}</center>
@stop()