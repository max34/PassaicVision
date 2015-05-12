<!DOCTYPE html>
<html>
<head>
	<title>{{$subtitle}}</title>
	{{HTML::script('global/jquery-2.1.4.min.js')}}
	{{HTML::script('global/js/global.js')}}
	{{HTML::script('bootstrap/js/bootstrap.js')}}
	{{HTML::style('bootstrap/css/bootstrap.css')}}
	{{HTML::style('css/global.css')}}

</head>
<body>
	<nav class="navbar navbar-default">
	 <ul class="nav nav-pills">
	 	<li><a href="index">Home<span>Welcome</span></a></li>
	 	<li><a href="staff">Physitians<span>Our Profesional</span></a></li>
	 	<li><a href="services">Services<span>Specialty</span></a></li>
	 	<li><a href="contact">Contact Us<span>How can we help you?</span></a></li>
	 	<li><a href="blog">Blog<span>Our Ideals</span></a></li>
	 	<li><a href="comment">Comments<span>Our community talks</span></a></li>
	 </ul>
		
	</nav>
	@yield('content')
</body>
</html>