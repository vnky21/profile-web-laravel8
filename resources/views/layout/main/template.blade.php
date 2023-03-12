<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DevFolio - Developer Portfolio Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/main/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/main/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/main/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/main/css/style.css') }}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">DevFolio</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/about-me" class="nav-item nav-link">About Me</a>
                        <a href="/portofolio" class="nav-item nav-link">Portofolio</a>
                        <a href="/blog" class="nav-item nav-link">My Blog</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        @yield('content')



        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">

                        <div class="row">
                            <div class="col-lg-4">
                                <h2>About Website</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, hic?</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <h2>Link</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                               <a href="">Jome</a> | 
                               <a href="">Home</a> |
                               <a href="">Home</a> |
                               <a href="">Home</a> |
                            </div>
                            <div class="col-lg-4">
                                <h2>Contact</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, doloremque.</p>
                                <p>+012 345 67890</p>
                                <p>info@example.com</p>
                            </div>
                        </div>
                      
                  
                        
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved | Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/main/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/main/lib/lightbox/js/lightbox.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/main/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('assets/main/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/main/js/main.js') }}"></script>
    </body>
</html>
