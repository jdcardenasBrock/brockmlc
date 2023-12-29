@extends('layouts.website') 
@section('content')
<style>

	.testi-single-box{
		display: -webkit-box;
		max-height: 154px;
		-webkit-line-clamp: 2;
		-webkit-box-orient: horizontal;
		overflow: hidden;
	}
.slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}

	.testi-discription{
		font-size: 14px;
		font-style: italic;
	}

	.testi-discription p{
		margin-bottom: 0px;
	}

	.testi-discription p a, .testi-text p a{
		font-style: italic;
	}

	#brock_team_img{
		padding: 0 0 494px;
	}

	#brock_team_img .faq-content{
		box-shadow: 2px 2px 8px 1px rgba(0, 0, 0, 0.8);
		background: #266041; margin-top: -25px;
		padding: 8px 58px 38px;		
	}	

	.mt-lg-80{
		margin-top: -80px;
	}

	.mt-lg-100{
		margin-top: -100px;
	}

	.about-thumb{
		height: 400px;
		width: 70%; 
	}

	@media (max-width: 767px) {

		#brock_team_img{
			padding: 0 0 194px;			
		}
		#brock_team_img .faq-content{			
			padding: 5px 18px 5px;		
		}

		.mt-lg-80{
			margin-top: 0;
		}

		.mt-lg-100{
			margin-top: 0;
		}

		.banner-carousel .slide-item .image-layer{
						    		
		}

		.banner-carousel .slide-item {			
			min-height: 250px;
		}

		.about-thumb{
			height: 250px;
			width: 100%;
		}

		.call-do-action-area{
			background-size: contain !important;
			background-repeat: no-repeat !important;
			margin-bottom: 70px !important;
		}
		
		.faq-content{
			margin-top: -30px !important;
			padding-top: 0 !important;
			padding-right: 0px !important;
			padding-left: 0 !important;
			padding-bottom: 2px !important;
		}	
		
		.section-main-title.faq h2{
			margin: 5px 10px 15px 20px !important;
			padding: 0 !important;			
		}

		.call-do-action-area{
			height: 250px;
			margin-top: 50px;
			padding-top: 0 !important;
			padding-right: 0 !important;
			padding-left: 0 !important;
			padding-bottom: 0 !important;
		}

		.video-icon a {
			height: 80px;
			width: 80px;
			line-height: 63px;
		}

		.video-icon a i {			
			font-size: 36px;
		}

		.mt-sm-180{
			margin-top: -180px;
		}

		.section-main-title{
			font-size: 21px;
		}  
		.section-title{
			text-align: center;
		}

	}	

	@media (min-width: 768px) and (max-width: 991px){ 

		.mt-lg-80{
			margin-top: -80px;
		}

		.mt-lg-100{
			margin-top: 0;
		}		

		.banner-carousel .slide-item {			
			min-height: 350px;
		}

		.section-title{
			text-align: center;
		}

		.about-thumb{
			height: 250px;
			width: 100%;
		}
		
		.slider-content.style-two {			
			text-align: center;
			width: 85%;
		}

		.call-do-action-area{
			height: 503px;
		}

		.faq-content{
			margin-top: -140px;
			padding: 8px 58px 8px;
		}

		#brock_team_section{
			background-size: contain !important;
			background-repeat: no-repeat !important;
		}

	}
	

</style>
<!--==================================================-->
<!-- Start Euildint Slider Style Two Area -->
<!--==================================================-->
<section class="banner-section">
	<div class="banner-carousel owl-carousel">
		<div class="slide-item one">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_1.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Building</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item two">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_2.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item tres">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_3.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item four">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_4.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item five">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_5.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item six">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_6.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item seven">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_7.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slide-item eight">
			<div class="image-layer" style="background-image: url('assets/images/slider/Home_8.jpg');"></div>
			<div class="container">
				<div class="slider-content style-two wow animate__slideInLeft">
					<div class="slider-sub-title">
						<!-- <h4>Great Experience In Restoration</h4> -->
					</div>
					<div class="slider-main-title">
						<h1>Building Tomorrow's Success 
						Today</h1>
					</div>
					<div class="slider-discripton">
						<p></p>
					</div>
					
					<div class="slider-social-menu">
						<!-- <ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==================================================-->
<!-- End Euildint Slider Style Two Area -->
<!--==================================================-->	

<!--==================================================-->
<!-- Start Euildint About Area -->
<!--==================================================-->
<div class="about-area style-two wow animate__slideInUp" style="padding-top: 75px">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="section-title d-lg-none d-sm-block mb-5">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>Superior Construction</h4>
					</div>
					<div class="section-main-title about">
						<h2>Exceeding The Demands Of Commercial Sitework & Building Through Innovation & Dependability</h2>
					</div>
				</div>
				<div class="about-thumb style-two wow animate__slideInUp" style="background-image: url('assets/images/home/Home_9-Sup_Construction.jpg'); background-position: center center; background-size: cover;">
					<!-- <img src="assets/images/home/Home_9-Sup_Construction.jpg" alt=""> -->
					<!-- statr about counter -->
					<div class="about-counter">
						<div class="about-numbar">
							<h4 class="counter">12</h4>
							<span>+</span>
						</div>
						<div class="about-counter-text">
							<h5>Years of Experience
								Construction Services</h5>
						</div>
					</div>
					<!-- End about counter -->
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="section-title d-none d-lg-block">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>Superior Construction</h4>
					</div>
					<div class="section-main-title about">
						<h2>Exceeding The Demands Of Commercial Sitework & Building Through Innovation & Dependability</h2>
					</div>
				</div>
				<div class="about-content wow animate__slideInUp">
					<div class="about-discribtion">
						<p>Meeting the demands of commercial construction requires expertise, experience, and readily available skilled resource.
						Brock Mountain offers virtually unlimited flexibility for construction, sitework, building and stormwater management. This unparalleled combination of capabilities results in extreme accuracy delivered on time and on-budget.</p>
					</div>
					<!-- start process bar -->
					
					<!-- End process bar -->
					<div class="row mt-3">
						<div class="col-lg-6">
							<!--start about single box -->
							<div class="about-single-box">
								<div class="about-icon">
									<img src="assets/images/resource/about-icon1.png" alt="">
								</div>
								<div class="about-text">
									<h4>Nationwide Service</h4>
									<p>Write some related text here.</p>
								</div>
							</div>
							<!--end about single box -->
						</div>
						
					</div>
					<!-- <div class="about-bottom">
						<div class="eulding-btn about">
							<a href="#">Read More <i class="bi bi-arrow-up-right-circle-fill"></i></a>
						</div>
						<div class="about-signiture">
							<img src="assets/images/about/about-sine.png" alt="">
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Euildint About Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Euildint Call Do Bg Area -->
<!--==================================================-->
<div class="call-do-action-area animate__slideInUp" id="brock_team_section" style="margin-bottom: 120px; background: url(assets/images/home/brock_team-scaled-2.jpg); background-position: center center; background-size: cover;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="faq-content" style="box-shadow: 2px 2px 8px 1px rgba(0, 0, 0, 0.8); background: #266041; margin-top: -140px; padding: 8px 58px 8px;">
					<div class="section-title">
						<div class="section-sub-title faq">
							<!-- <h4>Frequently Asked Questions</h4> -->
						</div>
						<div class="section-main-title faq">
							<h2 style="color: #FFF">We work with excellent people!</h2>
						</div>
						<!-- <div class="faq-discripition">
							<p>Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses. Creating visual content, such as logos, brochures, infographics. The timeline for seeing results depends on the specific services you choose and the current state of your business. </p>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End Euildint Call Do Bg Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Euildint Call Do Bg Area -->
<!--==================================================-->
<div class="call-do-action-area animate__slideInUp">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-video text-center">
					<div class="video-icon">
						<div id="building_video" style="display:none; width: 90%">
							<video controls preload="metadata">
								<source src="assets/videos/Commercial_Building_Division_Promo.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
						<a class="video-vemo-icon venobox vbox-item" data-autoplay="true" data-vbtype="inline" href="#building_video"><i class="bi bi-play"></i></a>							
					</div>
					<div class="call-do-title">
						<h2>Brock Mountain <br>Land Company, LLC</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Euildint Call Do Bg Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Euildint Testimonial Area -->
<!--==================================================-->
<div class="testimonial-area wow animate__slideInUp mt-100 mb-100" >
<div class="container">
	<div class="row">
		
		<div class="col-lg-5 col-md-12">					
			<!-- start section title -->
			<div class="section-title">
				<div class="section-shape">
					<img src="assets/images/resource/section-shape.png" alt="">
				</div>
				<div class="section-sub-title">
					<h4>TESTIMONIALS</h4>
				</div>
				<div class="section-main-title">
					<a href="our_clients.php" style="text-decoration: none;"><h2>Our Happy Clients</h2></a>
					<a href="our_clients.php" style="text-decoration: none;"><h2>Says About Us</h2></a>
				</div>
			</div>
			<!-- End section title -->
			<div class="row">
				<div class="testi_list owl-carousel">
					<div class="col-lg-12">
						<div class="testi-text">
							<p>
							<a href="our_clients.php" style="text-decoration: none;">	
							"Just did another close up tour of the beach.  Seeing a lot of your work.  Well Done!  I'm impressed beyond words!!!!  Thank you for what you do!  I'm telling everyone I know"<br>
							<strong>(Matt Reinhart - Volusia County Commissioner)</strong>
							</a>
							</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-text">
							<p>
							<a href="our_clients.php" style="text-decoration: none;">
							“Your team has done the unthinkable. “Your efforts are extremely appreciated and more work is coming on other projects””<br>
							<strong>(Property Manager)</strong>
							</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-12">
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mt-lg-80">
							<!-- start testi single box -->
							<div class="testi-single-box wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi1.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4></h4>
											<span>A client well pleased with Team BMLC!</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												“You were in a league of our own and amazing!  Good work team!”
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div> 
							<!-- End testi single box -->
						</div>
						<div class="col-lg-12 col-md-12">
							<!-- start testi single box -->
							<div class="testi-single-box wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi3.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4>
												<!-- Alex Mitchell -->
											</h4>
											<span>General Manager of Universal Engineering</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												“Nicely done Quincey!  You guys are first class!”
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- End testi single box -->
						</div>
						<div class="col-lg-12 col-md-12">
							<!-- start testi single box -->
							<div class="testi-single-box wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi3.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4>
												<!-- Alex Mitchell -->
											</h4>
											<span>Engineer representing the HOA</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												"I simply can't understand how contractors that have been doing this for 30 years don't look as good as ..."
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- End testi single box -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mt-lg-100 mt-sm-180">
							<!-- start testi single box -->
							<div class="testi-single-box two wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi2.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4>
												<!-- Guy Hawkins -->
											</h4>
											<span>Building Engineer</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												"It has been a pleasure to watch a crew that is organized, moving along nicely with difficult sheet piling work."
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- End testi single box -->
						</div>
						<div class="col-lg-12 col-md-12">
							<!-- start testi single box -->
							<div class="testi-single-box four wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi4.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4>
												<!-- Jessca Arow -->
											</h4>
											<span>Latrice Bryant-Robinson Daytona Beach Shores</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												"What an amazing, blessed and anointed organization you have created.. We will forever be grateful..."
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- End testi single box -->
						</div>
						<div class="col-lg-12 col-md-12">
							<!-- start testi single box -->
							<div class="testi-single-box four wow animate__slideInUp">
								<div class="testi-items-box">
									<div class="testi-content">
										<div class="testi-thumb">
											<!-- <img src="assets/images/testimonial/testi4.png" alt=""> -->
										</div>
										<div class="testi-title">
											<h4>
												<!-- Jessca Arow -->
											</h4>
											<span>Michelle Pace Wood</span>
										</div>
										<div class="testi-discription">
											
											<p>
												<a href="our_clients.php" style="text-decoration: none;">
												“Shout out to Brock Mountain Land Company, LLC & Eric Burns for the great expansion & renovation ...”
												</a>
											</p>
											
											</div>
										<div class="testi-icon-thumb">
											<img src="assets/images/testimonial/testi-icon.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- End testi single box -->
						</div>
					</div>
				</div>
			</div>					
		</div>		
	</div>
</div>
</div>
<!--==================================================-->
<!-- End Euildint Testimonial Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Euildint Brand Area -->
<!--==================================================-->
<div class="brand-area " style="margin-bottom: 120px;">
	<div class="container-fluid">
		<div class="row">
			<div class="brand_list owl-carousel">
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand1.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand2.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand3.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand4.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand5.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-thumb">
						<a href="#"><img src="assets/images/brand/brand6.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Euildint Brand Area -->
<!--==================================================-->

@endsection