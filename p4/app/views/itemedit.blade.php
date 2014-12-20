@extends('_master')

@section('title')
	Edit 
@stop

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
	          <a class="navbar-brand" href="/">Home</a>
	        </div>
	    </div>
	</nav> 	
@stop	


@section('content')

<div class='container-fluid'>
	@if(Session::get('flash_message'))
		<!-- <div class='flash-message'>{{Session::get('flash_message')}}</div> -->
		<div class='alert alert-danger alert-dismissible' role='alert'>
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			{{Session::get('flash_message')}}
		</div>
	@endif

	{{Form::open(array('url' => '/item/edit'))}}
		{{ Form::hidden('id', $item['id']); }}
		<div class='form-group'>
			<label for='itemtitle'>Title</label>
			<input tpye='text' class='form-control' id='itemtitle' name='itemtitle' value="{{$item['title']}}">
		</div>
		<div class='form-group'>
			<label for='itemdescription'>Description</label>
			<textarea id='itemdescription' name='itemdescription' class='form-control' row='3'>{{$item['description']}}</textarea>
		</div>
		<div class='container'>
			<div class='col-md-2'>
			</div>
			<div class='col-md-10'>
				@foreach($item->scenes as $scene)
					<fieldset>
						<legend>Scene {{$scene['title']}}</legend>
						<span id='dummySpan' style='visibility : hidden'>{{$scene['id']}}</span>
						<!-- <button id='deletescenebtn' type='button' class='btn btn-warning floatrightbtn'>Delete</button> -->
						<div class='form-group'>
							<label for='scenetitle'>Title</label>
							<input tpye='text' class='form-control' id="scenetitle{{$scene['id']}}" name="scenetitle{{$scene['id']}}" value="{{$scene['title']}}">
						</div>
						<div class='form-group'>
							<label for='scenedescription'>Description</label>
							<textarea id="scenedescription{{$scene['id']}}" name="scenedescription{{$scene['id']}}" class='form-control' row='3'>{{$scene['description']}}</textarea>
						</div>
						<div class='form-group'>
							<label for='sceneimage'>Image</label>
							<!-- <input id="sceneimage{{$scene['id']}}" name="sceneimage{{$scene['id']}}" class='form-control' type='text' vlaue="{{$scene['image']}}"> -->
							<textarea id="sceneimage{{$scene['id']}}" name="sceneimage{{$scene['id']}}" class='form-control' row='3'>{{$scene['image']}}</textarea>
						</div>
					</fieldset>
				@endforeach
			</div>
		</div>


		{{ Form::submit('Update',array(
		        'class' => 'btn btn-primary'
		)); }}

	{{Form::close()}}
</div>
@stop

@section('/body')
	<script type="text/javascript" src='/js/deletescene.js'></script>
@stop