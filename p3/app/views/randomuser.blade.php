@extends('_master')

@section('title')
	Generate random user
@stop

@section('head')
@stop

@section('tabcontents')
	<li ><a href="/">About</a></li>
	<li ><a href="/lorem">Lorem lpsum Generator</a></li>
	<li class='active'><a href="/randomuser">Random User Generator</a></li>
@stop

@section('content')
	<div class='container'>
		{{ Form::open(array('url' => '/randomuser', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			<br>
			<div class='form-group'>
				<label class="col-md-3" for="how_many_users">Number of Users: <span style="font-size:11px;font-weight:normal">(Max number is 6)</span></label>
				<div class='col-md-3'>
				{{ Form::input('number','how_many_users',3,array(
					'required',
					'max' => '6',
					'min' => '1',
					'class' => 'form-control'
				)) }}
				</div>
			</div>



			<br>
			{{ Form::label('birthdate', 'Birthdate') }}
			{{ Form::checkbox('birthdate', 'yes') }}

			<br>
			{{ Form::label('profile', 'Profile') }}
			{{ Form::checkbox('profile','yes') }}

			<br>
			{{ Form::label('email','email') }}
			{{ Form::checkbox('email','yes') }} 
			<br>
			{{ Form::submit('Generate',array(
				'class' => 'btn btn-primary'
			)); }}
		{{ Form::close() }}
	</div>

@stop

@section('body')
	@if(isset($randomusers))
	<div class='container'>
		@foreach($randomusers as $user)
			<h3>{{ $user['name'] }}</h3>
			<div class='container'>
				@if(isset($user['birthdate']))
					<p>{{ $user['email'] }}</p>
				@endif
				@if(isset($user['birthdate']))
					<p>{{ $user['birthdate'] }}</p>
				@endif
				@if(isset($user['profile']))
					<p>{{ $user['profile'] }}</p>
				@endif
			</div>


		@endforeach
	</div>

	@endif
@stop

@stop