@extends('layouts.admin')
@section('content')
@include('alerts.success')
<table class="table table-hover">
	<thead>
		<th>Genero</th>
		
		<th>Operacion</th>
	</thead>
	@foreach($generos as $genero)
	<tbody>
		<td>{{$genero->genre}}</td>
		<th>{!!link_to_route('genero.edit',$title='Editar',$parameters = $genero->id, $attributes = ['class'=>'btn btn-warning form-control'])!!}</th>
	</tbody>
	@endforeach()
</table>
<center>{!!$generos->render()!!}</center>
@stop()