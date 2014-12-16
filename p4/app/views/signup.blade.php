@extends('_master')

@section('header')
 	<nav class='navbar navbar-default navbar-static-top' role='navigation'>
		<div class='container-fluid '>
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/">Hidden Gems</a>
	        </div>

	        <div id='navbar' class='navbar-collapse collapse'>

	        	<ul class='nav navbar-nav navbar-right rightpad'>
	        		<li><a href="/signin" class='btn btn-primary'>Sign In</a></li>	        		
	        	</ul>
	        </div>
	    </div>
	</nav> 	
@stop

@section('content')
	<div class='container'>
		{{ Form::open(array('url' => '/signup', 'method' => 'POST', 'class' => 'form-signup')) }}
			<h2 class='form-signup-heading'>Sign up</h2>
			@if(Session::get('flash_message'))
				<div class='flash-message'>{{Session::get('flash_message')}}</div>
			@endif

			<div id='emailgroup' class='form-group'>
				<label for='email'>Email Address</label>
				<input type='email' id='email' name='email' class='form-control' placeholder='Email address' required autofocus>
				<!-- <span id='emailspan' class='glyphicon form-control-feedback' aria-hidden='true'></span> -->
				@if ($errors->has('email'))
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{$errors->first('email')}}
					</div>
				@endif
			</div>

			<div class='form-group'>
				<label for='password'>Password <small style='font-weight:normal'>(Min 6 characters)</small> </label>
				<input type='password' id='password' name='password' class='form-control' placeholder='Password' required >
				@if($errors->has('password'))
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{$errors->first('password')}}
					</div>
				@endif
			</div>
	
			<div class='form-group'>
				<label for='password_confirmation'>Retype Password</label>
				<input type='password' id='password_confirmation' name='password_confirmation' class='form-control' placeholder='Retype Password' required>
				@if($errors->has('password_confirmation'))
					<div class='alert alert-danger alert-dismissible' role='alert'>
					  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{$errors->first('password_confirmation')}}
					</div>
				@endif
			</div>
			
			{{ Form::submit('Sign up',array(
	        		'class' => 'btn btn-primary'
	        	)); }}
		{{ Form::close() }}
	</div>
@stop

