<!DOCTYPE HTML>
<html lang="en-US">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Brock MLC Website </title>
	<meta name="description" content="ProHound App">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/fav-icon/icon.ico')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animated-text.css')}}" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme-default.css')}}" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{asset('venobox/venobox.css')}}" type="text/css" media="all">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}"/>

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}"/> -->

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}" type="text/css" media="all">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" media="all">

    <!-- modernizr js -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>

<body>
    <style>
        .sticky-menu .col-lg-2{
            display: none;
        }
        .sticky-menu .col-lg-10{
            width: 100% !important;
        }
        .sticky-menu .header-munu{
            text-align: center;
           
        }
        .sticky-menu .header-munu.style-two ul li:last-of-type{
            margin-right: 55px !important;
        }
        .logo_footer, .footer-wiget-social{
            display: flex; 
            justify-content: center; 
            align-items: center;
        }        
        @media (max-width: 767px) {
            .logo_footer, .footer-wiget-social{
                display: block;
            } 
        }
        @media (min-width: 768px) and (max-width: 991px){
            .footer-wiget-log a img{
                width:150px;
            }
            .logo_footer{
                display: flex; 
                justify-content: start; 
                align-items: end;
            }
            .footer-wiget-social{
                display: flex; 
                justify-content: center; 
                align-items: end;
            }
            #social-tittle{
                text-align: center;
            }
        }
    </style>    
	<!-- loder -->
	  <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>	

	<!--==================================================-->
	<!-- Start Euildint Header Style Two Area -->
	<!--==================================================-->
	<div class="header-area style-two" id="navbar">
		<div class="container-fluid p-90">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="header-logo">
						<a href="{{route('index')}}"><img src="assets/images/logo_negativo.png" alt="logo" widht="187" height="60"></a>
					</div>
				</div>
				<div class="col-lg-10">
					<!--start header menu -->
					<div class="header-munu style-two">
						<ul>
							<li><a href="{{route('index')}}">Home</a>								
							</li>
							<li><a href="#">Who We Are <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{route('testimonials')}}">Testimonials</a></li>
										<li><a href="{{route('national_presence')}}">National Presence</a></li>
										<li><a href="#" onclick="mostrarAlerta()">News</a></li>
									</ul>
								</div> 
							</li>
							<li><a href="#">What We Do <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{route('sitework')}}">Sitework</a></li>
										<li><a href="{{route('building')}}">Building</a></li>
										<li><a href="{{route('restoration')}}">Restoration</a></li>
										<!-- <li><a href="https://brockmountainhomes.com/" target="_blank">Brock Mountain Homes</a></li> -->
									</ul>
								</div>
							</li>
							<li><a href="#">Work With Us <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="#" onclick="mostrarAlerta()">Become a Vendor</a></li>
										<li><a href="#" onclick="mostrarAlerta()">Career Opportunities</a></li>
										<li><a href="{{route('contact')}}">Contact Us</a></li>
										<li><a href="#" onclick="mostrarAlerta()">BMLC portal</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<!-- <div class="header-call-section">
							<div class="header-call-icon">
								<i class="bi bi-telephone-plus"></i>
							</div>
							<div class="header-call-title">
								<a href="#">Need help?  Call us: </a>
								<span><a href="#"> (888) 774-6498 </a></span>
							</div>
						</div> -->
					</div>
					<!-- end header menu -->
				</div>
			</div>
		</div>
	</div>

	<!--Mobile Menu Area -->
	
    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
            <a href="{{route('index')}}"><img src="/assets/images/logo_negativo.png" class="mean-bar-img" /></a>
            <!-- <img src="/assets/images/logo_negativo.png"  class="mean-bar-img" width="50px" /> -->
			<nav class="Edulin_menu">
				<ul class="nav_scroll">
                    <li><a href="{{route('index')}}">Home</a>								
                    </li>
                    <li><a href="#">Who We Are</i></a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                <li><a href="{{route('national_presence')}}">National Presence</a></li>
                                <li><a href="#" onclick="mostrarAlerta()">News</a></li>
                            </ul>
                        </div> 
                    </li>
                    <li><a href="#">What We Do</i></a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{route('sitework')}}">Sitework</a></li>
                                <li><a href="{{route('building')}}">Building</a></li>
                                <li><a href="{{route('restoration')}}">Restoration</a></li>
                                <li><a href="https://brockmountainhomes.com/" target="_blank">Brock Mountain Homes</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Work With Us</i></a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="#" onclick="mostrarAlerta()">Become a Vendor</a></li>
                                <li><a href="#" onclick="mostrarAlerta()">Career Opportunities</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="#" onclick="mostrarAlerta()">BMLC portal</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
			</nav>
		</div>
	</div>

	<!--==================================================-->
	<!-- End Euildint Header Style Two Area -->
	<!--==================================================-->



    <main>
  

    @yield('content')

    </main>


<!--==================================================-->
<!-- Start Euildint Footer Area -->
<!--==================================================-->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 logo_footer">
                <div class="footer-wiget" style="visibility: visible;">
                    <div class="footer-wiget-log">
                        <a href="{{route('index')}}"><img width="150px" src="assets/images/Logo negativo.png" alt=""></a>
                    </div>
                    <div class="footer-wiget-text">
                        <p></p>
                    </div>
                    <!-- <div class="footer-wiget-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget " style="visibility: visible;">
                    <div class="footer-wiget-title">
                        <h4>Our Services</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="{{route('sitework')}}"><i class="bi bi-chevron-double-right"></i> Sitework</a></li>
                            <li><a href="{{route('building')}}"><i class="bi bi-chevron-double-right"></i> Building </a></li>
                            <li><a href="{{route('restoration')}}"><i class="bi bi-chevron-double-right"></i> Restoration </a></li>
                            <!-- <li><a href="https://brockmountainhomes.com/"><i class="bi bi-chevron-double-right"></i> Brock Mountain Homes </a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget " style="visibility: visible;">
                    <div class="footer-wiget-title">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="{{route('index')}}"><i class="bi bi-chevron-double-right"></i> Home </a></li>

                            <li><a href="#" onclick="mostrarAlerta()"> <i class="bi bi-chevron-double-right"></i> Become a Vendor</a></li>
                            <li><a href="#" onclick="mostrarAlerta()"><i class="bi bi-chevron-double-right"></i> Career Opportunities</a></li>
                            <li><a href="{{route('contact')}}"><i class="bi bi-chevron-double-right"></i> Contact Us </a></li>
                            <li><a href="#" onclick="mostrarAlerta()"><i class="bi bi-chevron-double-right"></i> BMLC portal </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 pr-0">
                <div class="foter-box">
                    <div class="footer-wiget-title" id="social-tittle">
                        <h4>Connect With Us</h4>
                    </div>
                    <div class="footer-wiget-social" >
                        <ul>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.facebook.com/brockmlc/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="mailto:info@brockmlc.com"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="footer-recent-thumb">
                                <img src="assets/images/footer/Footer6.jpg" alt="">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-6 col-md-12">
                <div class="copyright-text">
                    <p>Brock MLC - Copyright © 2024 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint Footer Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!--==================================================-->
<!-- End Search Popup Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->
<!-- scrollup section -->
 <div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End scrollup section Area -->
<!--==================================================-->


<!-- jquery js -->
<script src="{{asset('assets/js/vendor/jquery-3.6.2.min.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>

<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- counterup js -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<!-- waypoints js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>

<!-- wow js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>

<!-- imagesloaded js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

<!-- venobox js -->
<script src="{{asset('venobox/venobox.js')}}"></script>

<!--  animated-text js -->
<script src="{{asset('assets/js/animated-text.js')}}"></script>

<!-- venobox min js -->
<script src="{{asset('venobox/venobox.min.js')}}"></script>

<!-- isotope js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

<!-- jquery meanmenu js -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<!-- jquery scrollup js -->
<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>

<script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>
<!-- jquery js -->

<!-- theme js -->
<script src="{{asset('assets/js/theme.js')}}"></script>
<script>$(".embed-responsive").click(function() {
    $(".embed-responsive iframe").css("pointer-events", "auto");
  });
  
  $(".embed-responsive").mouseleave(function() {
    $(".embed-responsive iframe").css("pointer-events", "none");
  });
  $(document).ready(function(){
    $(".venobox").venobox(); 
  });
  </script>  
  <script>
    // $(document).ready(function(){
    //     console.log($(".sticky-menu"))
    // })
    
    // $(".sticky-menu .container-fluid.p-90 .row.align-items-center .col-lg-10").addClass("col-lg-12")
    // $(".sticky-menu .container-fluid.p-90 .row.align-items-center .col-lg-10").removeClass("col-lg-10")
  </script>
    <script>
        function mostrarAlerta() {
            alert('This page is under construction.');
        }
    </script>
</body>

</html>