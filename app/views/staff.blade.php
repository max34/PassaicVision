@extends('layout')

@section('content')
<div class="container">
	<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-3 text-center">
                    <a data-toggle="modal" data-target="#mendoza"><img class="img-responsive" src="{{URL :: to('/')}}/img/mendoza2.JPG" alt=""></a>
                    <h3>Luis Mendoza
                        <small>General &amp; Pediatric Opthalmologist</small>
                    </h3>

                    <!--modal trigger-->
                    <button class="btn btn-default" data-toggle="modal" data-target="#mendoza">Learn more</button>

                    <div class="modal fade" id="mendoza" tab-index="-1" role="dialog" aria-labelledby="mendoza">
                    	<div class="modal-dialog" role="document">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    				<h4 class="modal-title" id="mendoza">Luis Mendoza M.D.</h4>
                    			</div>
                    			<div class="modal-body">
                    				  <img class="img-circle" src="{{URL :: to('/')}}/img/mendoza2.JPG">
                                    <hr>
                                      <p><strong>Luis Mendoza</strong> is a Board Certified ophthalmologist, was born in Pamplona, Colombia, in South America, 
                                        country in which he has done his academic studies. He then moved to North America where he became a Diplomat
                                        of the American Board of Opthalmology in 1974. Dr. Mendoza was appointed to the medical staff of St. Joseph's 
                                        Hospital in Paterson, NJ, and Beth Israel Hospital in Passaic, NJ. In 1972, he opened his office as a General 
                                        Ophthalmologist, then in 2012, he moved his office to Passaic, place in which he is more than happy to heal the community.<br>
                                        <strong>Spoken Language:</strong> English, Spanish. 
                                      </p>
                                      <hr>
                                      <table class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th><strong>Academic Background</strong></th>
                                            <th><strong>Laboral Background &AMP; Practice</strong></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>San Jose College, Colombia</td>
                                                <td>St. Joseph Hospital</td>
                                            </tr>
                                            <tr>
                                                <td>National University of Colombia</td>
                                                <td>University Hospital of San Juan de Dios, Colombia</td>
                                            </tr>
                                            <tr>
                                                <td>University of Pennsylvania</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                     <a data-toggle="modal" data-target="#gonzalez"><img class="img-responsive" src="{{URL :: to('/')}}/img/gonzalez1.JPG" alt=""></a>
                    <h3>Carmen Gonzalez<br>
                        <small>Glaucoma Specialist</small>
                    </h3>

                    <!--modal trigger-->
                    <button class="btn btn-default" data-toggle="modal" data-target="#gonzalez">Learn more</button>
    				
    				<!--modal section-->
                    <div class="modal fade" id="gonzalez" tab-index="-1" role="dialog" aria-labelledby="gonzalez">
                    	<div class="modal-dialog" role="document">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    				<h4 class="modal-title" id="gonzalez">Carmen. H. Gonzalez M.D.</h4>
                    			</div>
                    			<div class="modal-body">
                    			     <img class="img-circle" src="{{URL :: to('/')}}/img/gonzalez1.JPG" alt="">
                    				<hr>
                                    <p><strong>Carmen. H. Gonzalez</strong> is a Board Certified member to practice in the state of New Jersey. She has experienced in 
                                        diagnostics and treatment of a wide range of diseases and disorders of the eyes. Dr. Carmen H. Gonzalez comes from a
                                        Hispanic background which can help us to better understand our community. She has offer her services to many places, 
                                        and her studies can help you reach a better health for your sight.<br/>
                                        <strong>Spoken Language: </strong> English, Spanish.
                                    </p>
                                    <hr>
                                 <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             <th>Academic Background</th>
                                             <th>Laboral Background &amp; Practice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>University of Medicine &amp; Dentistry of New Jersey, Newark, NJ</td>
                                                <td>Northern New Jersey Eye Institute, NJ</td>
                                            </tr>
                                            <tr>
                                                <td>Louisiana State University/Ochsner Clinic Foundation, New Orleans, AL</td>
                                                <td>University of Medicine &amp; Dentistry of New Jersey, Newark, NJ</td>
                                            </tr>
                                            <tr>
                                                <td>Saint Barnabas Medical Center, Livingston, NJ</td>
                                                <td>New England Eye Center, Boston, MA</td>
                                            </tr>
                                            <tr>
                                                <td>Massachusetts, Eye &amp; Ear Infirmary, Boston, MA</td>
                                                <td>Centro Medico de los Andes, Bogota, Colombia</td>
                                            </tr>
                                            <tr>
                                                <td>New England Eye Center, Boston, MA</td>
                                                <td>Hospital Universitario de la Misericordia, Bogota, Colombia</td>
                                            </tr>
                                            <tr>
                                                <td>The Wilmer Eye Institute, Baltimore, MD</td>
                                                <td>Centro Policlinic del Olaya, Bogota, Colombia</td>
                                            </tr>
                                            <tr>​
                                                <td> Cleveland Clinic Foundation Eye Institute, Cleveland, O.H.</td>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Pontifica Universidad Javeriana, Bogota, Colombia</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Hospital Reginal de Duitana, Duitana, Colombia</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Hospital Universitario de San Ignacio, Bogota, Colombia</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Mount Sinai School of Medicine</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Harvard Medical School</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                            
                                        </tbody>

                                    </table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>

                <div class="col-sm-3 text-center">
                        <a data-toggle="modal" data-target="#freilich"><img class="img-responsive" src="{{URL :: to('/')}}/img/freilich.jpg" alt=""></a>
                    <h3>Benjamin Freilich<br>
                        <small>Retina Disease <br> 
                        Specialist</small>
                    </h3>
                    <!--modal trigger-->
                    <button class="btn btn-default" data-toggle="modal" data-target="#freilich">Learn more</button>

                    <!--modal section-->
                    <div class="modal fade" id="freilich" tab-index="-1" role="dialog" aria-labelledby="freilich">
                    	<div class="modal-dialog" role="document">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    				<h4 class="modal-title" id="freilich">Benjamin Freilich M.D.</h4>
                    			</div>
                    			<div class="modal-body">
                    				<img class="img-circle" src="{{URL :: to('/')}}/img/freilich.jpg">
                                    <hr>
                                    <p><strong>Benjamin D. Freilich</strong> is Board Certified to practice in the states of New York and New Jersey,
                                        He is specially trained in eye diseases, surgery of retina and vitreous, and ophthalmology.
                                        Dr. Freilich served as a flight surgeon in the United States Navy from 2000 - 2007. He is currently
                                        working hard on educating his patients on the treatment and management of various eye diseases.<br/>
                                        <strong>Spoken Language:</strong> English.
                                    </p>
                                    <hr>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             <th><strong>Academic Background</strong></th>
                                             <th><strong>Special Interest</strong></th>
                                             <th><strong>Laboral Background &AMP; Practice</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>University of Chicago</td>
                                                <td>Diabetic Retinopathy</td>
                                                <td>Mount Sinai Hospital, NY</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>State University of New York</td>
                                                <td>Macular Degeneration</td>
                                                <td>Englewood Hospital, NJ</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Mount Sinai School of Medicine</td>
                                                <td>Retina Detachment</td>
                                                <td>Medical Center of Englewood, NJ</td>
                                            </tr>
                         
                                            <tr>
                                                <td>Harvard Medical School</td>
                                                <td>Retinal Vascular Occlusions</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td>Retina Diseases</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td>Vitreous Diseases</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                  </table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                        <a data-toggle="modal" data-target="#gunzburg"><img class="img-responsive" src="{{URL :: to('/')}}/img/gunzburg.jpg" alt=""></a>
                    <h3> Allison Gunzburg
                        <small>Cornea, Cataract &amp; Galucoma</small>
                    </h3>
                    <!--modal trigger-->
                    <button class="btn btn-default" data-toggle="modal" data-target="#gunzburg">Learn more</button>

                    <!--modal section-->
                    <div class="modal fade" id="gunzburg" tab-index="-1" role="dialog" aria-labelledby="gunzburg">
                    	<div class="modal-dialog" role="document">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    				<h4 class="modal-title" id="gunzburg">Allison Gunzburg M.D.</h4>
                    			</div>
                    			<div class="modal-body">
                    				<img class="img-circle" src="{{URL :: to('/')}}/img/gunzburg.jpg">
                                    <hr>
                                    <p><strong>Allison Gunzburg</strong> is a Board Certified comprehensive ophthalmologist, 
                                        specializing in cornea and refractive surgery. After practicing and being a 
                                        Certified Public Accountant. She decided to follow her lifelong interest in medicine. 
                                        Originally from Chicago, she moved to New Jersey in an effort to educate her patients 
                                        on dry eye disease its causes and consequences.<br/>
                                        <strong>Spoken Language:</strong>English.
                                    </p>
                                    <hr>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><strong>Academic Background</strong></th>
                                                <th><strong>Special Interest</strong></th>
                                                <th><strong>Laboral Background &AMP; Practice</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>University of Illinois</td>
                                                <td>Dry Eye Disease</td>
                                                <td>Ravenswood Hospital</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Northwestern University Medical School of Chicago</td>
                                                <td>Retina Surgery</td>
                                                <td>St.Louis</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>University of Chicago</td>
                                                <td></td>
                                                <td>Southern Illinois</td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
</div>

@stop