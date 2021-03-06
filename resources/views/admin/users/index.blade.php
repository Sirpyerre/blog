@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Usuarios
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Name</th>
					<th>Permisos</th>
					<th>Delete</th>
					
				</tr>
			</thead>
			<tbody>
				@if($users->count())
					@foreach($users as $user)
						<tr>
							<td>
								<img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name}}" 
									width="60px" height="60px" style="border-radius: 50%;">
							</td>
							<td>
								{{ $user->name }}
							</td>
							<td>
								@if($user->admin)
									<a href="{{ route('user.not.admin', ['id'=>$user->id]) }}" class="btn btn-xs btn-danger">
										Remover permisos
									</a>	
								@else
									<a href="{{ route('user.admin', ['id'=>$user->id]) }}" class="btn btn-xs btn-success">
										Cambiar a administrador
									</a>	
								@endif
			
							</td>
							<td>
								@if(Auth::id() !== $user->id)
									<a href="{{ route('user.delete', ['id'=>$user->id]) }}" class="btn btn-xs btn-danger">
										Eliminar cuenta
									</a>
								@endif
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="5" class="text-center">No hay usuarios</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop