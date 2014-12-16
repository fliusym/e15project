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
	        		<li><a href="/signup" class='navbarprimarybtn'>Sign Up</a></li>	        		
	        	</ul>
	        </div>
	    </div>
	</nav> 	
@stop

@section('content')
	<div class='container'>
		@if(Session::get('flash_message'))
			<!-- <div class='flash-message'>{{Session::get('flash_message')}}</div> -->
			<div class='alert alert-danger alert-dismissible' role='alert'>
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				{{Session::get('flash_message')}}
			</div>
		@endif
		{{ Form::open(array('url' => '/signin', 'method' => 'POST', 'class' => 'form-signup')) }}
			<h2 class='form-signup-heading'>Sign In</h2>

			<div id='emailgroup' class='form-group'>
				<label for='email'>Email Address</label>
				<input type='email' id='email' name='email' class='form-control' placeholder='Email address' required autofocus>
			</div>

			<div class='form-group'>
				<label for='password'>Password</label>
				<input type='password' id='password' name='password' class='form-control' placeholder='Password' required >
				@if($errors->has('password'))
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{$errors->first('password')}}
					</div>
				@endif
			</div>
	
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" id='remember-me' name='remember-me' value="remember-me"> Remember me
	          </label>
	        </div>
			
			{{ Form::submit('Sign In',array(
	        		'class' => 'btn btn-primary'
	        	)); }}
		{{ Form::close() }}
	</div>
@stop