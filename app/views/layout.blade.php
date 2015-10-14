<!DOCTYPE html>
<html>
<head>
	<title>{{$subtitle}}</title>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	{{HTML::style('css/bootstrap.min.css')}}		
	{{HTML::style('css/business-casual.css')}}
    {{HTML::style('css/font-awesome.min.css')}}
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59988056-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
        <!--header-->
        <div class="brand">Passaic Vision Vision Center</div>
        <div class="address-bar"> 289 Monroe Street | Passaic, NJ 07055 | 973.473.5151</div>

        <!--navigation-->
         <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span class="sr-only"> Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home">Passaic Vision</a>
                    </div>
    				
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="current"><a href="home">Home</a></li>
                            <li><a href="services">Services</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="staff">Physicians</a></li>
                        </ul>
                    </div>
            </div><!--header-->
         </nav><!--/header-wrapper-->

 
    @yield('content')
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 205Ventures 2015</p>
                    <div class="social-media">
                    <a href="https://www.facebook.com/pvcllc"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/pvcllc"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    <a href="https://www.google.com/+Passaicvisioncenterllc"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
	{{HTML::script('js/jquery.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
    <script>
    $('.carousel').carousel({
        iterval:3000
    });
    </script>
</body>
</html>