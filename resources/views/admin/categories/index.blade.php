@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Categorías
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Editar</th>
					<th>Borrar</th>
					
				</tr>
			</thead>
			<tbody>
				@if($categories->count())
					@foreach($categories as $category)
						<tr>
							<td>
								{{ $category->name }}
							</td>
							<td>
								<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-xs btn-info">
									Edit
								</a>
							</td>

							<td>
								<a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-xs btn-danger">
									Delete
								</a>
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="5" class="text-center">No hay categorias</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop