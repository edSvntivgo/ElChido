@extends('layouts.admin')
@section('content')
@include('alerts.success')
	<div class="jumbotron">
		<table class="table table-hover">
				<thead>
					<thead>
						<th>usuario</th>
						<th>Comentario</th>
						<th>opera</th>
					</thead>
					<tbody>
						@foreach($comentarios as $comentario)
						<td>{{$comentario->usuario}}</td>
						<td>{{$comentario->comentario}}</td>
					</tbody>
						@endforeach
				</thead>
		</table>
		{!!$comentarios->render()!!}
	</div>
	<div class="jumbotron">
		{!!Form::open(['route'=>'comentario.store','method'=>'POST'])!!}
			<div class="form-group">
				{!!Form::label('Usuario:')!!}
				{!!Form::text('usuario',$value=Auth::user()->name,['class'=>'form-control','readonly'=>'readonly'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Comentario')!!}
				{!!Form::text('comentario',null,['class'=>'form-control','autofocus'=>'true'])!!}
			</div>
			{!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}
		{!!Form::close()!!}
	</div>
@endsection