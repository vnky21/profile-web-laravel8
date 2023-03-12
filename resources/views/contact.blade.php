@extends('layout.main.template')

@section('content')
  <!-- Hero Start -->
  <div class="hero" id="home">
            <div class="container-fluid">
                <div class="text-center">
                        <div class="hero-content-menu">
                            <div class="hero-text mb-5">       
                                <h1>Contact</h1>                     
                            </div>             
                        </div>
                    </div>
                </div>      
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class=" wow fadeInUp contact" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="img/get-me.svg" width="500px" alt="Blog">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Social Media</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos reprehenderit laborum a architecto, cumque adipisci dolorum animi similique eum.</p>
                            <div class="footer-social-contact">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <div class="container-fluid p-5">
            <div class="container contact ">
                <div class="section-header text-center wow zoomIn mt-3" data-wow-delay="0.1s">
                
                    <h2>Send My Message</h2>
                    <p>Tuliskan pesan anda dibawah ini</p>
                </div>
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block"></p>
                    </div>
                    <div class="text-right">
                    
                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        </div>

@endsection