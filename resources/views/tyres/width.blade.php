<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
       
	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" type="text/css">
 	
	<script
  src="https://code.jquery.com/jquery-1.9.1.min.js"
  integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/jquery.isotope.js"></script>
	<script type="text/javascript" src="/js/wow.js"></script>
	<script type="text/javascript" src="/js/classie.js"></script>
	 <script type="text/javascript" src="/js/style.js"></script>
 <!-- Scripts Vue-->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="/img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Hello  {{ Auth::user()->name }} </h1>
			<a class="link animated fadeInUp delay-1s servicelink" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="{{ route('mkgarage') }}">Home</a></li>
				<li><a href="{{ url('tyresbrand') }}">Brand</a></li>
				<li><a href="{{ url('tyreswidth') }}">Width</a></li>
				<li><a href="#client">Ratio</a></li>
				<li><a href="#team">Rim</a></li>
				<li><a href="#contact">Spgeed</a></li>
				<li><a href="{{ route('home') }}">Pricing</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->

        <div class="container" id='app'>
            <twidth-list></twidth-list>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="/img/footer-logo.png" alt=""></a></div>
			<span class="copyright">&copy; KGarage. All Rights Reserved</span>
			<div class="credits">
				<!--
          All the links in the footer should remain intact. 
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
				<a href="#">Tyres Manager</a> by <a href="#">Kofi</a>
			</div>
		</div>
	</footer>


	


	
</body>

</html>

