@extends('layout')

@section('content')
	
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="{{URL::to('/')}}/img/main_logo.JPG" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{URL::to('/')}}/img/lenses_cabinet.JPG" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{URL::to('/')}}/img/reception.JPG" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Passaic Vision Center</h1>
                    <hr class="tagline-divider">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> Our 
                        <strong>Commitment</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Passaic Vision Center is a health service company, located in the heart of Passaic in the state of New Jersey. 
                    We are in charge of the eye health of our community. We as a clinic and nevertheless as human beings, take care of our 
                    community no just as a chart number, but as a member of this community. Our Staff members and Ophthalmologists are here to 
                    take care of your eyes, by providing an excellent service, the most accurate equipment of the area, and the most knowledgeable staff.</p>
                    
                    <p>We, as family members and members of the Passaic Community, are always seeking for our community's best interest, for that reason 
                    we are expanding our store, and offering the most affordable prices in the county. We keep our business going because of you the patient 
                    and our most valuable family member. We learn more from the community everyday so we put it into practice everyday, that reflects on our 
                    performance on and off the premises.</p>

                    <p>A word from Doctor Mendoza: 'After more than forty years as a Physician, specialized in Ophthalmology (eyes), I know and I feel that 
                    NOW I am more qualified to provide my patients the best integral eye care. Each patient is a whole person and not just a pair of sick eyes.' 
                    Believe it to see it followed by see it to believe it!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful boxes
                        <strong>to showcase your content</strong>
                    </h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

    </div>	
	
@stop
