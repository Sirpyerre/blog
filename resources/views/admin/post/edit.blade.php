@extends('layouts.app')

@section('content')
	
	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Editar post: {{ $post->title }}
		</div>
		<div class="panel-body">
			<form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="title">Titulo</label>
					<input type="text" name="title" class="form-control" value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="featured">Imagen</label>
					<input type="file" name="featured" class="form-control">	
				</div>

				<div class="form-group">
					<label for="category">Selecciona una categoría</label>
					<select name="category_id" id="category" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="content">Contenido</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Editar post</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@stop