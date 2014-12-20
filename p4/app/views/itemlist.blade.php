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
	          <a class="navbar-brand" href="/">Home</a>
	        </div>

	        <div id='navbar' class='navbar-collapse collapse'>

	        	<ul class='nav navbar-nav navbar-right rightpad'>
	        		<li><a href="/sharemytravel">+Share</a></li>
	        		<li><a href="/signout">Sign out</a></li>
	        		        		
	        	</ul>
	        </div>
	    </div>
	</nav> 
@stop

@section('content')
	<div class='container-fluid'>
		@if(sizeof($items) == 0)
			<div class='row'>
				<p>No Posts</p>
			</div>
			<div class='row'>
				<a href="/sharemytravel"></a>
			</div>
		@else
			<div class='panel-group row' id='accordion' role='tablist' aria-multiselectable='true'>
				@foreach($items as $item)
					{{ Form::hidden('id',$item['id']); }}
					<div class='panel panel-default'>
						<div class='panel-heading' role='tab' id="heading{{$item['id']}}">
							<div class='row'>
								<div class='col-md-8'>
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$item['id']}}"aria-expanded="true" aria-controls="collapse{{$item['id']}}">
									    {{$item['title']}}
									  </a>
									</h4>
								</div>
								<div class='col-md-4'>
									<a href="/item/edit/{{$item['id']}}">Edit</a>
									<span id='dummySpan' style='visibility : hidden' >{{$item['id']}}</span>
									<button name="deleteitembtn-{{$item['id']}}" type='button' class='btn btn-default'>Delete</button>
								</div>
							</div>


						</div>
						<div id="collapse{{$item['id']}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$item['id']}}">
						  <div class="panel-body">
						    <div class='row'>
						    	<p>{{ $item['description'] }}</p>
						    </div>
						    <div class='row'>

						    	{{-----new collpase for scenes------}}
						    	<div class='container-fluid'>
						    		<div class='panel-group' id='scenespanel' role='tablist' aria-multiselectable='true'>
						    			@foreach($item->scenes as $scene)
						    				<div class='panel-heading' role='tab' id="headingscene{{$scene['id']}}">
						    					<h4 class="panel-title">
						    					  <a data-toggle="collapse" data-parent="#scenespanel" href="#collapsescene{{$scene['id']}}"aria-expanded="true" aria-controls="collapsescene{{$scene['id']}}">
						    					    {{$scene['title']}}
						    					  </a>
						    					</h4>
						    				</div>
						    				<div id="collapsescene{{$scene['id']}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingscene{{$scene['id']}}">
						    					<div class='panel-body'>
						    						<div class='row'>
						    							<p>{{ $scene['description'] }}</p>
						    						</div>
						    						<div class='row'>
						    							<img class='img-responsive' src="{{$scene['image']}}">
						    						</div>
						    					</div>
						    				</div>
						    			@endforeach
						    		</div>
						    	</div>
						    </div>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		@endif
	</div>
@stop

@section('/body')
	<script type="text/javascript" src='/js/deleteitem.js'></script>
@stop