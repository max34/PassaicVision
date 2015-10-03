@extends('layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Sevices</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-border-left" src="{{URL::to('/')}}/img/pa1.jpg" alt="">
                </div>
                <div class="col-md-8">
                    <p>Come to our clinic and you will get the most comprehensive and complex eye exam. If you have an optic disorder, 
                    our team of professionals will help you diagnose, treat, and, manage your problem. Our team is also willing to provide a 
                    second opinion. Also eye surgeries are available on our clinic.</p>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Glaucoma</strong></td>
                                <td><strong>Eye Exam</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Catarat</strong></td>
                                <td><strong>Retina</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Second Opinion</strong></td> 
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
@stop
