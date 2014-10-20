@extends('_master')

@section('title')
	About p3
@stop

@section('head')
@stop

@section('tabcontents')
	<li class='active'><a href="/">About</a></li>
	<li ><a href="/lorem">Lorem lpsum Generator</a></li>
	<li><a href="/randomuser">Random User Generator</a></li>
@stop


@section('content')
@stop

@section('body')
	<div class='container'>
		<br>
		<p>As a developer, sometimes you need to have some friends to help finish your project.
			"Lorem lpsum generator" can be used to test your visual presentation. "Random User Generator"
			can be used to generate some fake user data for your application.
		</p>
		<h2>Lorem Ipsum Generator</h2>
		<blockquote>
			In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. 
			By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
		</blockquote>
		<h2>Random User Generator</h2>
		<blockquote>
			It is used to generate random user data including name, phone number, email, birthdate,address, etc. Like Lorem lpsum, but for people.
		</blockquote>
	</div>

@stop

@stop