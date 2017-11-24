@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Tags
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Editar</th>
					<th>Borrar</th>
					
				</tr>
			</thead>
			<tbody>
				@if($tags->count())
					@foreach($tags as $tag)
						<tr>
							<td>
								{{ $tag->tag }}
							</td>
							<td>
								<a href="{{ route('tags.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info">
									Edit
								</a>
							</td>

							<td>
								<a href="{{ route('tags.delete', ['id' => $tag->id]) }}" class="btn btn-xs btn-danger">
									Delete
								</a>
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="5" class="text-center">No hay tags todavia</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop