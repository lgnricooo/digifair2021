<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from zoyothemes.com/queue/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Feb 2021 05:06:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>ICT Unit - Division of Tuguegarao City</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Zoyothemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('/homeAssets/images/ictu.png')}}">
        <!-- Bootstrap -->
        <link href="{{asset('/homeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{{asset('/homeAssets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{asset('/homeAssets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="{{asset('/homeAssets/css/owl.carousel.min.css')}}"/> 
        <link rel="stylesheet" href="{{asset('/homeAssets/css/owl.theme.default.min.css')}}"/>

        <!-- Flickity -->
        <link href="{{asset('/homeAssets/css/flickity.css')}}" rel="stylesheet" type="text/css" />
        <!-- Main css File -->
        <link href="{{asset('/homeAssets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/homeAssets/css/colors/default.css')}}" rel="stylesheet" id="color-opt">
        
    </head>

    <body style="background-image: url('{{asset('/homeAssets/images/home/home-shape.png')}}'); background-repeat: no-repeat;">
        <!-- Navbar Start -->
        <div id="navbar">
            <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
                <div class="container">
                    <!-- Logo container-->
                    <a class="logo" href="{{ url('/') }}">ICTU</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button><!--end button-->

                    <div class="collapse navbar-collapse navigation" id="navbarCollapse">
                        <ul class="navbar-nav ms-auto" id="navbar-navlist">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li><!--end nav item-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('registration') }}">Registration</a>
                            </li><!--end nav item-->
                        </ul>
                    </div> 
                </div><!--end container-->
            </nav><!--end navbar-->
        </div>
        <!-- Navbar End -->

        <!-- Hero Area -->
        <div class="hero-area position-relative bg-half-120 pb-0" id="home" style="margin-top: -50px;">
            <!--<div class="bg-overlay"></div>-->
            <div class="container" width="" style="">
                <div class="row">
                    <div class="col-lg-7 col-md-7 align-items-center" style="margin-top: 10px">
                        <div class="title-heading mt-4 py--50">
                            <h1 class="heading text-black">ICTU - DIGIFAIR 2021</h1>
                            <h3 class="pera-title text-light-muted">Department of Education Schools Division of Tuguegarao City</h3>
                            <h2 class="pera-title text-light-muted">Date: May 26-28, 2021</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0" style="margin-top: 10px"> 
                        <div class="home-image">
                            <img src="{{asset('/homeAssets/images/ictu.png')}}" alt="" class="img-fluid mx-auto position-relative">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="{{asset('/homeAssets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/homeAssets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/homeAssets/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('/homeAssets/js/scrollspy.min.js')}}"></script>

        <!-- Magnific Js -->
        <script src="{{asset('/homeAssets/js/isotope.js')}}"></script>
        <script src="{{asset('/homeAssets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/homeAssets/js/magnific.init.js')}}"></script>

        <!-- Slider Js -->
        <script src="{{asset('/homeAssets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/homeAssets/js/owl.init.js')}}"></script>

        <!-- Contact -->
        <script src="{{asset('/homeAssets/js/contact.js')}}"></script>

        <!-- Counter init -->
        <script src="{{asset('/homeAssets/js/counter.init.js')}}"></script>

        <!-- Feather icon -->
        <script src="{{asset('/homeAssets/js/feather.min.js')}}"></script>

        <!-- Typed -->
        <script src="{{asset('/homeAssets/js/typed.js')}}"></script>
        <script src="{{asset('/homeAssets/js/typed.init.js')}}"></script>
        
        <!-- Flickity Js -->
        <script src="{{asset('/homeAssets/js/flickity.pkgd.min.js')}}"></script>

        <!-- Switcher -->
        <script src="{{asset('/homeAssets/js/switcher.js')}}"></script>

        <!-- Main Js -->
        <script src="{{asset('/homeAssets/js/app.js')}}"></script>
    </body>


</html>