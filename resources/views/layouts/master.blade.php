<html>
	<head>
		<title>Swapbd.com | @yield('title')</title>
		<link rel="shortcut icon" href="/assets/images/swap.png" type="image/x-icon">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="/css/styles.css">
		<link rel="stylesheet" href="/css/slideshow.css">
		<link rel="stylesheet" href="/css/card.css">
		<link rel="stylesheet" href="/css/dropbtn.css">
		<link rel="stylesheet" href="/css/sidebar.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
		
		
	</head>
	<body>
		<div class="container">
		@section('header')
			<div class="header" style="background-color: #008080;color: white;">
				<h1 class="header-heading">Welcome to Swap World</h1>
				<h6>- Where product can be swap</h6>
			</div>
		@show
		@section('nav-bar')
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a href="{{route('index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="40" width="40" align="left"></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<!-- <li class="nav-item">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="{{route('Ad.loggedOutView')}}">All Ads</a></button>
						
					</li>
					<li class="nav-item">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="{{route('Ad.selectType')}}">Post your ad</a></button>
						
					</li> -->
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Ad.loggedOutView')}}">All Ads</a></button>
					<button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Ad.selectType')}}">Post your ad</a></button>
					<button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Login.loginView')}}">login</a></button>
				</form>
			</div>
		</nav>
		@show


		<div class="container">
			@yield('content')
		</div>

		@section('footer')
			<div class="footer">
				&copy; Swap World, All rights researved.  
			</div>
		@show
	</div>
	</body>
</html>