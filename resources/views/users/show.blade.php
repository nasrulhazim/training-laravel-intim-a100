@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>User Details</h3>
		
		<div class="panel panel-default">
			<div class="panel-body">
				Name: {{ $user->name }}<br>
				E-mail: {{ $user->email }}<br>
				Gender: {{ $user->profile->gender }}
			</div>
		</div>

		<a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-warning">Edit User</a>
		<a href="{{ route('users.index') }}" class="btn btn-danger">Back to User List</a>
	</div>
@endsection