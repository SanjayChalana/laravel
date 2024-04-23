<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Megakit| Html5 Agency template</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{url('frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{url('frontend/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('frontend/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{url('frontend/plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{url('frontend/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{url('frontend/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>

<body>


<!-- Header Start --> 

<header class="navigation">
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	Blog<span>Buzz</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
<!--
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="about.html">Our company</a></li>
						<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li>
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
-->
			</ul>

			@if(Auth::check()) {{-- Check if user is authenticated --}}
		
             <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="profile_nav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
					margin-top: -29px;
				"><img src="{{asset('frontend/images/about/default-image.jpg') }}" alt="Profile Image" width="40" height="40">{{ Auth::user()->name }}</a>
				<ul class="dropdown-menu" aria-labelledby="profile_nav">
					<li>
						<form id="logout-form" action="{{ url('logout') }}" method="POST">
							@csrf
							<button type="submit" class="dropdown-item">Logout</button>
						</form>
					</li>
				</ul>
				
			  </li>
		@else
			{{-- If user is not authenticated, display sign-up and login buttons --}}
			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
				<a href="{{ url('signup') }}" class="btn btn-solid-border btn-round-full">SignUp</a>
				<a href="{{ url('login') }}" class="btn btn-solid-border btn-round-full">Login</a>
			</form>
		@endif
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 