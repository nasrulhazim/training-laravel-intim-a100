@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="{{ route('users.update',[$user->id]) }}">
				<fieldset>


				{{-- <input type="hidden" name="_method" value="put"> --}}
				{{-- Use this, instead of hardcoded spoofing input above --}}
				
				{{ method_field('PUT') }}

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">

				<!-- Form Name -->
				<legend>Update User Details</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="name">Name</label>  
				  <div class="col-md-4">
				  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="" value="{{ $user->name }}">
				    
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">E-mail</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="" value="{{ $user->email }}">
				    
				  </div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-8">
				    <button id="submit" name="submit" class="btn btn-success">Save</button>
				    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
				  </div>
				</div>

				</fieldset>
				</form>

			</div>
		</div>

	</div>
@endsection