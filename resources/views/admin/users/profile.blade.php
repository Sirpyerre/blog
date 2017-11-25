@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Editar perfil
		</div>
		<div class="panel-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="name" class="form-control" value="{{ $user->name }}">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" name="email" class="form-control" value="{{ $user->email }}">
				</div>

				<div class="form-group">
					<label for="name">Cambiar password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Cambiar foto</label>
					<input type="file" name="avatar" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Facebook</label>
					<input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
				</div>

				<div class="form-group">
					<label for="name">Youtube</label>
					<input type="text" name="youtube" class="form-control" value="{{ $user->profile->facebook }}">
				</div>

				<div class="form-group">
					<label for="about">Acerca de mi</label>
					<textarea class="form-control" id="about" name="about" cols="6" rows="6">{{ $user->profile->about }}</textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success">
							Guardar perfil
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop