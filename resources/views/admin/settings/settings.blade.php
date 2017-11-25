@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Nueva Usuario
		</div>
		<div class="panel-body">
			<form action="{{ route('user.store') }}" method="post">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success">
							Guardar usuario
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop