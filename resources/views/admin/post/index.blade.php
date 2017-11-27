@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Post publicados
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Título</th>
					<th>Categoría</th>
					<th>Editar</th>
					<th>Restaurar</th>
					
				</tr>
			</thead>
			<tbody>
				@if($posts->count())
					@foreach($posts as $post)
						<tr>
							<td>
								<img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
							</td>
							<td>
								{{ $post->title }}
							</td>
							<td>
								{{ $post->category->name }}
							</td>
							<td>
								<a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">
									Editar
								</a>
							</td>

							<td>
								<a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">
									Borrar
								</a>
							</td>

						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="5" class="text-center">No hay posts</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop