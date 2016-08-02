@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>User List <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary" ><i class="glyphicon glyphicon-plus"></i></a></h3>
		<div class="pull-right"> 
			{{ $users->links() }}
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a class="btn btn-sm btn-info" href="{{ route('users.show',[$user->id]) }}">Details</a>
							<a class="btn btn-sm btn-success" href="{{ route('users.edit',[$user->id]) }}">Edit</a>

							<a href="{!! route('users.destroy', [$user->id]) !!}" 
					  			data-method="delete" 
					  			data-token="{{csrf_token()}}" 
					  			data-confirm="nk tohok ker?" 
					  			class="btn btn-sm btn-danger">
					  			<i class="glyphicon glyphicon-trash"></i>
					  		</a>
					  		
						</td>
					</tr>
				@empty
				    <tr>
						<td>No users</td>
					</tr>
				@endforelse
			</tbody>
		</table>
		<div class="pull-right"> 
			{{ $users->links() }}
		</div>
	</div>
@endsection