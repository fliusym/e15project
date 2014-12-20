@extends('_master')

@section('header')
	{{-------header--------}}
	<div class='navbar-wrapper'>
		<div class='container'>
		 	<nav class='navbar navbar-default navbar-static-top' role='navigation'>
				<div class='container-fluid '>
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="/">Share Trips</a>
			        </div>

			        <div id='navbar' class='navbar-collapse collapse'>
			        	<ul class='nav navbar-nav'>
			        		<li class='active'><a href="/">Home</a></li>
			        	</ul>

			        	<ul class='nav navbar-nav navbar-right rightpad'>
			        		@if(Auth::check())
			        			<li class='dropdown'>
			        				<a href="#" class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>{{Auth::user()->email}} <span class='caret'></span></a>
			        				<ul class='dropdown-menu' role='menu'>
			        					<!-- <li><a href="#">Profile</a></li> -->
			        					<li><a href="/sharemytravel">+Share</a></li>
			        					<li><a href="/itemlist">Posted</a></li>
			        				</ul>
			        			</li>
			        			
			        			<li><a href="/signout">Sign out</a></li>
			        		@else
			        			<li><a href="/signin" >Sign In</a></li>
			        			<!-- <li><button type='button' class='btn btn-default navbar-btn' >Sign Up</button></li>	        			 -->
			        			<li><a href="/signup" class='navbarprimarybtn' >Sign Up</a></li>
			        		@endif
			        	</ul>
			        </div>
			    </div>
			</nav> 			
		</div>
	</div>


	{{--------carousel---------}}
	<div id='myCarousel' class='carousel slide' data-ride='carousel'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>

		</ol>
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
		    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
		    <div class="container">
		      <div class="carousel-caption">
		        <h1>Welcome to Share Trip.</h1>
		        <p>From here you can share the most exciting moments in your trip.</p>
		        <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
		      </div>
		    </div>
		  </div>
		  <div class="item">
		    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
		    <div class="container">
		      <div class="carousel-caption">
		        <h1>How It Works.</h1>
		        <p>After registration, you can share any item and in each item you can add many scenes.</p>
		        <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
		      </div>
		    </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>		
	</div><!--/.carousel-->

	<!--featurettes-->
	<div class='container marketing'>
		<hr class="featurette-divider">

		<div class="row featurette">
		  <div class="col-md-5">
		    <img class="img-responsive" src="https://kamonohashikamo.files.wordpress.com/2012/07/great_wall_of_china.jpg" alt="Generic placeholder image">
		  </div>
		  <div class="col-md-7">
		    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
		    <div class='row'>
		    	<button type='button' class='btn btn-default'>
		    	  <span class='glyphicon glyphicon-thumbs-up'> 5</span>
		    	</button>
		    	<button type='button' class='btn btn-default'>
		    	  <span class='glyphicon glyphicon-thumbs-down'> 5</span>
		    	</button>		    	
		    </div>

		    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		  </div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
		  <div class="col-md-7">
		    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
		    <div class='row'>
		    	<button type='button' class='btn btn-default'>
		    	  <span class='glyphicon glyphicon-thumbs-up'> 5</span>
		    	</button>
		    	<button type='button' class='btn btn-default'>
		    	  <span class='glyphicon glyphicon-thumbs-down'> 5</span>
		    	</button>		    	
		    </div>
		    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		  </div>
		  <div class="col-md-5">
		    <img class="img-responsive" src='http://upload.wikimedia.org/wikipedia/commons/1/10/20090529_Great_Wall_8185.jpg' alt="Generic placeholder image">
		  </div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->


		<!-- FOOTER -->
		<footer>
		  <p class="pull-right"><a href="">Back to top</a></p>
		  <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</footer>
	</div>
@stop