@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="{{ route('users.store') }}">
					<fieldset>

					<input type="hidden" name="_token" value="{!! csrf_token() !!}">

					<!-- Form Name -->
					<legend>Create New User</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">Name</label>  
					  <div class="col-md-4">
					  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" >
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">E-mail</label>  
					  <div class="col-md-4">
					  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" >
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ic">I/C</label>  
					  <div class="col-md-4">
					  <input id="ic" name="ic" type="text" placeholder="" class="form-control input-md" >
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="gender">Gender</label>
					  <div class="col-md-4">
					    <select id="gender" name="gender" class="form-control">
					      <option value="M">Male</option>
					      <option value="F">Female</option>
					    </select>
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Password</label>
					  <div class="col-md-4">
					    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" >
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="religion">Religion</label>
					  <div class="col-md-4">
					    <select id="religion" name="religion" class="form-control">
					      <option value="Islam">Islam</option>
					      <option value="Christian">Christian</option>
					      <option value="Hindu">Hindu</option>
					      <option value="Others">Others</option>
					    </select>
					  </div>
					</div>

					<!-- Prepended text-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">Phone</label>
					  <div class="col-md-4">
					    <div class="input-group">
					      <span class="input-group-addon">+6</span>
					      <input id="phone" name="phone" class="form-control" placeholder="01912345678" type="text" >
					    </div>
					    
					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="submit"></label>
					  <div class="col-md-8">
					    <button id="submit" name="submit" class="btn btn-success">Save</button>
					    <a id="cancel" name="cancel" href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
					  </div>
					</div>

					</fieldset>
					</form>

			</div>
		</div>

	</div>
@endsection