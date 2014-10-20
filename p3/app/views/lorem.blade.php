@extends('_master')

@section('title')
	Lorem lpsum Generator
@stop

@section('head')
@stop

@section('tabcontents')
	<li ><a href="/">About</a></li>
	<li class='active'><a href="/lorem">Lorem lpsum Generator</a></li>
	<li><a href="/randomuser">Random User Generator</a></li>
@stop

@section('content')
	<div class='container'>
		{{ Form::open(array('url' => '/lorem', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			<br>
			<div class='form-group'>
				<label class="col-md-3" for="how_many_paragraphs">Number of paragraphs: <span style="font-size:11px;font-weight:normal">(Max number is 9)</span></label>
				<div class='col-md-2'>
				{{ Form::input('number','how_many_paragraphs',3, array(
					'required',
					'min' => '1',
					'max' => '9',
					'class' => 'form-control'
				)) }}
				</div>


				{{ Form::submit('Generate',array(
					'class' => 'btn btn-primary'
				)); }}
			</div>

		{{ Form::close() }}
	</div>

@stop

@section('body')
	<br>
	<div class='container'>
		@if(isset($gentext))
			@foreach($gentext as $paragraph)
				<p>{{ $paragraph }}</p>
			@endforeach	
		@endif
	</div>


@stop

@stop