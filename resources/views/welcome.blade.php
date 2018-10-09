@extends('layouts.main')
@section('header')
<header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">KA Motors</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li>A powerful simple web application to manage your tyres inventory for your customers. 
                <br>Proof of Concept.</li>
            </ul>
            
            <a class="link animated fadeInUp delay-1s servicelink" href="#tyres">Come On In - Let's Talk Business</a>
        </div>
    </header>
    <!--header-end-->
    @endsection
@section('content')
<section class="main-section client-part" id="tyres">
        <!--main-section client-part-start-->
        <div class="container">

      {!! Form::open(['action' => 'HomeController@searchTyre']) !!}
            @include('forms.tyresearchform', ['submitButtonText' => 'SEARCH'])
    {!! Form::close() !!} 
               
               
              
             
         </div>
    </section>


    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Auto Repair Services</h2>
            <h6>We offer exceptional service with Free diagnostics & brake check.</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/garage.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>MOT TEST</h3>
                            <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/three.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>DIAGNOSE</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                        <img src="img/screwdriver.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>REPAIRS</h3>
                            <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/paint-spray.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>BODYWORK &amp; PAINT</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/tire.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>TYRE &amp; WHEEL</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/battery.png" width="48px" alt="">
                        </div>
                        <div class="service-list-col2">
                            <h3>BATTERIES</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                        </div>
                    </div>
                </div>
                <figure class="col-lg-8 col-sm-6  text-center wow fadeInUp delay-02s">
                    <img src="img/tyresmanager.png" alt="">
                         <form method="post" action="{{action('NotificationController@bookMOT')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}      
                   
                        <h2>BOOK YOUR MOT</h2>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-center">
                            
                
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                        </div>
                    <div class="col-lg-6">  
                        <div class="form-group">
                                
                                 <input type="date" class="form-control input-text" name="motdate" id="motdate" placeholder="MOT Booking Date" data-rule="minlen:11" data-msg="Please enter at least 11 chars of phone number" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        </div> 
                        <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                               <input type="text" class="form-control input-text" name="phone" id="phone" placeholder="Phone Number" data-rule="minlen:11" data-msg="Please enter at least 11 chars of phone number" />
                                <div class="validation"></div>
                            </div>
                          </div>
                    <div class="col-lg-6 col-sm-6">
                       <button type="submit" class="input-btn">Book Now</button> 
                              
                        
                </div>
            </div></form>
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->
 <section id="portfolio">
   <div class="carousel" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#" data-slide-to="0" class="active"></li>
    <li data-target="#" data-slide-to="1"></li>
    <li data-target="#" data-slide-to="2"></li>
    <li data-target="#" data-slide-to="3"></li>
    <li data-target="#" data-slide-to="4"></li>
    <li data-target="#" data-slide-to="5"></li>
    

  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
         <div class="carousel-caption">
    <h3>CLUTCH REPAIRS AND INSTALLATIONS</h3>
    <p>
ENSURING SAFE AND CONTROLLED DRIVING</p>
  </div>
      <img src="img/1.jpg" alt="mk-garage">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="mk-garage">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="mk-garage">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" alt="mk-garage">
    </div>
    <div class="carousel-item">
      <img src="img/5.jpg" alt="mk-garage">
    </div>
    <div class="carousel-item">
         <div class="carousel-caption">
    <h2>CLUTCH REPAIRS AND INSTALLATIONS</h2>
    <h2>
ENSURING SAFE AND CONTROLLED DRIVING</h2>
  </div>
      <img src="img/6.jpg" alt="mk-garage">

    </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
 </section>
 <!-- Map -->
    <section id="client" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1228.5906086592538!2d-0.7306935459601679!3d51.985350592028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876550511d5a711%3A0xb37ee09727cf7082!2sBishop+Parker+Catholic+School!5e0!3m2!1sen!2suk!4v1525177164333" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen scrolling="no" marginheight="0" marginwidth="0"></iframe>
      
    </section>
    
    
    <section class="main-section team" id="team">
        <!--main-section team-start-->
        <div class="container">
            <h2>team</h2>
            <h6>Take a closer look into our amazing team. Your car is in Good Hands.</h6>
            <div class="team-leader-block clearfix">
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-03s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                             
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">Ray</h3>
                    <span class="wow fadeInDown delay-03s">Call Me</span>
                    <p class="wow fadeInDown delay-03s">07951461280</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader  wow fadeInDown delay-06s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                             
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Tony</h3>
                    <span class="wow fadeInDown delay-06s">Call Me</span>
                    <p class="wow fadeInDown delay-06s">07951461280</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-09s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                             
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-09s">Steve</h3>
                    <span class="wow fadeInDown delay-09s">Call Me</span>
                    <p class="wow fadeInDown delay-09s">07951461280</p>
                </div>
            </div>
        </div>
    </section>
    <!--main-section team-end-->



    <section class="business-talking">
        <!--business-talking-start-->
        <div class="container">
            <h2>Let’s Talk Business</h2>
        </div>
    </section>
    <!--business-talking-end-->
    <div class="container">
        <section class="main-section contact" id="contact">

            <div class="row">
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3><i class=" icon-map-marker"></i>Address:</h3>
                        <span>Abbeydore Grove<br>Monkston, MK10 9</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Phone:</h3>
                        <span>07951461280</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-pencil"></i>email:</h3>
                        <span>komphi@gmail.com</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa-clock-o"></i>Hours:</h3>
                        <span><strong>Monday - Friday:</strong> 9am - 6pm<br><strong>Saturday:</strong> 9am - 12pm<br><strong> Sunday:</strong> Closed</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                        
                        <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                   <form method="post" action="{{action('NotificationController@sendMessage')}}" enctype="multipart/form-data">
 
                        {{ csrf_field() }} 
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                           
                            <div class="form-group">
                                <textarea class="form-control input-text text-area" name="info" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection