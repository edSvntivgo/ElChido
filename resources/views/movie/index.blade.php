@extends('layouts.admin')
@section('content')
@include('alerts.success')
<div>
<table class="table table-hover">
	<thead>
		<th>Nombre De Pelicula</th>
		<th>Duracion</th>
		<th>Direccion</th>
		<th>Portada</th>
		<th>Video Clip</th>
		<th>Operacion</th>
	</thead>
	<tbody>
		@foreach($movies as $movie)
		<td>{{$movie->nombre}}</td>
		<td>{{$movie->cast}}</td>
		<td>{{$movie->direction}}</td>
		<td><img src="{{$movie->path}}" style="width:183px; height: 310px; "></td>
			<td>
				<div class="media img-responsive">
			        <div class="media-body">
			            {!! Embed::make($movie->video)->parseUrl()->getIframe() !!}
			        </div>
   				 </div>
			</td>
		@if(Auth::user()->id ==1)
		<td>
			{!!link_to_route('movie.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-warning form-control'])!!}
		</td>
		@elseif(Auth::user()->id !=1 || Auth::user()->id ==1)
		<td>
			{!!link_to_route('comentario.index',$title='Comentarios',$parameters=$movie->id,$attributes=['class'=>'btn btn-primary form-control'])!!}
		</td>
		@endif
		
	</tbody>
	
	@endforeach
</table>

<center>{!! $movies->render()!!}</center>
</div>
@stop()