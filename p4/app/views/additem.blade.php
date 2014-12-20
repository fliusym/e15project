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
	        		<li><a href="/signout" class='navbarprimarybtn'>Sign Out</a></li>	        		
	        	</ul>
	        </div>
	    </div>
	</nav> 	
@stop

@section('content')
<div class='container'>
	<!-- {{ Form::open(array('url' => '/sharemytravel', 'method' => 'POST')) }} -->
		<div class='row'>
			<div class='form-group'>
				<label for="itemtitle" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="itemtitle" >
				</div>
				<label class="col-sm-2 control-label">Description</label>
				<div>
				  <textarea class='form-control' id='itemdescription' row='2'></textarea>
				</div>
				<div class='panel-group row' id='accordion' role='tablist' aria-multiselectable='true'>

				</div>
				<button type='button' id='addneweventbtn' class='btn btn-link' data-toggle='modal' data-target='#myModal'>
				  <span class='glyphicon glyphicon-plus-sign'></span>
				  Add New Event
				</button>
<!-- 				<button type='button' id='addneweventbtn' class='btn btn-lg addneweventbtn' data-toggle='modal' data-target='#myModal'>
					Add New Event
				</button> -->
			</div>
		</div>

		<div class='row'>
			<button type='button' id='addnewitembtn' class='btn btn-primary'>Add New Item</button>				
		</div>


		<div>
		</div>
		<!--Modal-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Add New Event</h4>
		      </div>
		      <div class="modal-body">
		        <div class='container-fluid'>
		        	<br>
		        	<div class='row'>
		        		{{Form::label('title','Title')}}
		        		<input type='form-control' type='text' id='neweventtitle'>
		        	</div>
		        	<br>
		        	<div class='row'>
		        		{{Form::label('description','Description')}}
		        		<textarea id='neweventdescription' class='form-control' rows='3'></textarea>
		        	</div>
		        	<br>
		        	<div class='row'>
		        		{{Form::label('photo','Photo')}}
		        		<input type='form-control' type='text' id='neweventphoto' class='sm'>
		        	</div>
		        	<br>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" id='neweventokbtn' class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		

	<!-- {{ Form::close() }} -->
</div>
@stop

@section('/body')
<script type="text/javascript" src='/js/additem.js'></script>
@stop