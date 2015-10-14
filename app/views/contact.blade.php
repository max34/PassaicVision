@extends('layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Passaic Vision</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                   <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48277.20975906351!2d-74.126167!3d40.864728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fecd6549da43%3A0x8054a309a1ad87b6!2s289+Monroe+St%2C+Passaic%2C+NJ+07055!5e0!3m2!1sen!2sus!4v1443722878811" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>973.473.5151</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:passaicvision@aol.com">passaicvsion@aol.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>289 Monroe Street
                            <br>Passaic, NJ 07055</strong>
                    </p>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Office Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monday</td>
                                <td>9:00am - 7:00pm</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>9:00am - 7:00pm</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>9:00am - 6:00pm</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>9:00am - 7:00pm</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>9:00am - 6:00pm</td>
                            </tr>
                            <tr>
                                <td>Satruday</td>
                                <td>8:00am - 5:00pm</td>
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
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p class="intro-text text-center">Tell us how can we improve or send us an email to schedule an appointment.<br>
                     <strong>Please be advise Email schedule may take up to 24 hour to confirm</strong></p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Reason</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>Catarat</option>
                                    <option>Glaucoma</option>
                                    <option>Eye Exam</option>
                                    <option>Retina</option>
                                    <option>Second Opinion</option>
                                    <option>Other...</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@stop