<!DOCTYPE html>
<html>
<head>
	<title>{{$subtitle}}</title>
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/animate.min.css')}}
	{{HTML::style('css/prettyPhoto.css')}}
	{{HTML::style('css/responsive.css')}}
	{{HTML::style('css/font-awesome.css')}}
	{{HTML::style('css/font-awesome.min.css')}}		
	{{HTML::style('css/main.css')}}

</head>
<body>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="comment">Comments</a></li>
                        <li class="dropdown">
                            <a href="staff" class="dropdown-toggle" data-toggle="dropdown">Physitians<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="staff#mendoza">Mendoza</a></li>
                                <li><a href="staff#gonzalez">Gonzalez</a></li>
                                <li><a href="staff#gunzburg">Gunzburg</a></li>
                                <li><a href="staff#freilich">Freilich</a></li>
                            </ul>
                        </li>
                        <li><a href="blog">Blog</a></li> 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


	@yield('content')

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

	{{HTML::script('js/jquery.js')}}
	{{HTML::script('js/jquery.isotope.min.js')}}
	{{HTML::script('js/jquery.prettyPhoto.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/wow.min.js')}}
	{{HTML::script('js/respond.min.js')}}
	{{HTML::script('js/html5shiv.js')}}
	{{HTML::script('js/main.js')}}
</body>
</html>