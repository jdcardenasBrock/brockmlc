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

	.testimonial-area .testi-discription{
		font-size: 14px;
		font-style: italic;
	}

	.testi-discription p{
		margin-bottom: 0px;
	}

	.testimonial-area .testi-discription p a, .testimonial-area .testi-text p a{
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

	.link_custom{
		text-decoration: none;
	}

	.link_custom:hover{
		color: #141422;
	}

	.testi-text{
		font-size: 45px;
		font-weight: 500;
		line-height: 44px;
	}	

	.owl-stage{
		display: flex; 
		justify-content: center; 
		align-items: center;		
	}
	
	.owl-stage .col-lg-12{
		display: flex; 
		justify-content: center; 
		align-items: center;		
	}

	#top_notch{
		position: absolute; top: -20%; right: 15%;
	}

	#description_brock{
		padding-top: 60px;
		margin-top: -90px;
	}

	.about-area {
		padding-top: 112px !important;
	}

	.owl-item{
		margin-right: 100px; 
		margin-left: 100px;
	}
	
	.testimonial-area{
		margin-top: 120px;
	}

	#logo_section_1{
		padding-top: -150px;
		margin-top: -30px;
    	margin-bottom: 130px;		
	}

	#container_section_1{
		margin-top: 120px;
	}

	@media (max-width: 767px) {

		/* .brand-thumb a img{
			width: 150px !important;
		} */

		/* .testimonial-area .owl-stage{
			margin-bottom: -50px;
		} */

		#container_section_1{
			margin-top: 0;
		}

		.brand-thumb{
			height: 100px !important;
		}

		.testimonial-area .owl-stage{			
			margin-bottom: -70px;
		}

		.owl-item{
			margin: 0 !important;
		}

		.testimonial-area{
			margin-top: 40px;
		}

		.testi-text p a{		
			font-size: 21px !important;	
			line-height: 26px;
		}

		.about-discribtion p{
			text-align: center;
			padding: 20px;
		}	

		#top_notch{
			width: 85px;
			top: 5%; right: 0;
			display: none;
		}	

		#logo_section_1{
			width: 75%;
			margin-left: 12%;
			margin-top: 0;
    		margin-bottom: 70px;
		}

		#description_brock{
			padding-top: 0;
		}

		.about-area{
			padding-top: 60px !important;
		}

		#container-testimonials{
			padding: 25px;
		}

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

		/* .owl-stage{
			width: 1950px !important;
		} */

		#logo_section_1{			
			margin-top: 0;
			margin-bottom: 70px;		
		}

		#container_section_1{
			margin-top: 0;
		}

		.about-discribtion p{
			text-align: center;
		}

		#top_notch{
			width: 185px;			
			top: 0; right: 2%;
			/* display: none; */
		}

		.section-main-title h2{
			font-size: 30px;
		}

		.faq-content{
			margin-top: -100px !important;			
		}

		.testimonial-area .owl-stage{			
			margin-bottom: -180px !important;
		}

		.brand-thumb{	
			height: 80px !important;		
			width: 150px !important;
			background-size: contain !important;
		}

		.owl-item{
			margin: 0 !important;
		}

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
	<video autoplay muted loop style="width:100%;">
		<source src="assets/images/Video BM Home 760 v5.mp4">
	</video>
</section>
<!--==================================================-->
<!-- End Euildint Slider Style Two Area -->
<!--==================================================-->	

<!--==================================================--> 
<!-- Start Euildint About Area -->
<!--==================================================-->
<div class="about-area style-two wow animate__slideInUp" style="background-color: #272a2c; margin-top: -10px;">
	<div class="container" id="container_section_1">
		<div class="row">
			<div class="col-lg-6 col-md-12 d-flex justify-content-center">
				<!-- <div class="section-title d-lg-none d-sm-block mb-5"> -->
					<!-- <div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div> -->
					<!-- <div class="section-sub-title">
						<h4 style="color: white">We Are More Than A General Contractor…</h4>
					</div> -->
					<!-- <div class="section-main-title about">
						<h2>Exceeding The Demands Of Commercial Sitework & Building Through Innovation & Dependability</h2>
					</div> -->
				<!-- </div> -->
				<div class="about-thumb style-two wow animate__slideInUp" id="logo_section_1" style="background-image: url('assets/images/Logo negativo.png'); background-position: center center; background-size: contain; background-repeat: no-repeat;">
					<!-- <img src="assets/images/home/Home_9-Sup_Construction.jpg" alt=""> -->
					<!-- statr about counter -->
					<!-- <div class="about-counter">
						<div class="about-numbar">
							<h4 class="counter">12</h4>
							<span>+</span>
						</div>
						<div class="about-counter-text">
							<h5>Years of Experience
								Construction Services</h5>
						</div>
					</div> -->
					<!-- End about counter -->
				</div>
			</div>
			<div class="col-lg-6 col-md-12" id="description_brock">
				<!-- <div class="section-title d-none d-lg-block"> -->
					<!-- <div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div> -->
					<!-- <div class="section-sub-title">
						<h4 style="color: white">We Are More Than A General Contractor…</h4>
					</div> -->
					<!-- <div class="section-main-title about">
						<h2 style="color: white">WE'RE MORE THAN A GENERAL CONTRACTOR, WE'RE YOUR SOLUTION</h2>
					</div> -->
				<!-- </div> -->
				<div class="about-content wow animate__slideInUp">
					<div class="about-discribtion">
						<p style="color: white">
						With over 25 years of industry experience,
						our focus lies in fostering meaningful
						relationships with our clients. We
						approach every project with integrity and expertise which allows us to offer
						comprehensive solutions, making complex
						projects simple. At Brock Mountain, we are
						dedicated to providing a seamless
						experience for our clients.
					</p>
					</div>
					<!-- start process bar -->
					
					<!-- End process bar -->
					<div class="row mt-3">
						<div class="col-lg-6">
							<!--start about single box -->
							<!-- <div class="about-single-box">
								<div class="about-icon">
									<img src="assets/images/resource/about-icon1.png" alt="">
								</div>
								<div class="about-text">
									<h4>Nationwide Service</h4>
									<p>Write some related text here.</p>
								</div>
							</div> -->
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
<!-- Start Euildint Slider Style Two Area -->
<!--==================================================-->
<section class="blog-standard-area" style="background-color: #272a2c;">
	<div class="blog-standard-box">
		<div class="row">
			<div class="blog_list owl-carousel">
				<div class="col-lg-12">
					<div class="blog-standard-thumb" style="">
						<img src="assets/images/home/brock_team-scaled-2.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-12 row">
					<!-- <div class="blog-standard-thumb"> -->
						<div class="col-lg-5" style="padding: 5%">
							<p style="color: white; font-size: 26px;font-weight: 400;line-height: 36px;">
							We prioritize the safety of our most valuable
							asset — our people. This commitment is 
							reflected in our investments of in-house
							authorized instructors for OSHA 10-HR,
							30-HR, and Disaster Site Workers courses.
							Our mission is to ensure that every individual
							feels safe and secure in their work
							into this slide environment. We actively encourage open
							communication, empowering individuals to
							speak up and halt work if they identify
							unsafe conditions or suggest safer methods.
							</p>
						</div>
						<div class="col-lg-7">
							<img src="assets/images/Home_Page _ Safety.webp" alt="" >							
						</div>
					<!-- </div> -->
				</div>				
			</div>
		</div>
		<!-- <div class="blog-standard-meta">
			<span>By Admin</span>
			<span>17 Aug 2023 </span>
			<span class="meta">Construction</span>
		</div>
		<div class="blog-standard-content">
			<h4><a href="#">All the Greatest Moments of Thoroughbred</a></h4>
			<p>Why Roofing are factmake 17 Reason EasierForesee the pain & trouble that are bounds too ensue equalidea off denouncing pleasures and praising pain was borncomplete account and expound the actual teachings the great the master-builder of human happiness. In a free hour...</p>
		</div>
		<div class="eulding-btn standard">
			<a href="#">Read More <i class="bi bi-arrow-up-right-circle-fill"></i></a>
		</div> -->
	</div>
</section>
<!--==================================================-->
<!-- End Euildint Slider Style Two Area -->
<!--==================================================-->

<!-- <div class="container d-lg-none d-md-none d-sm-block top-notch" style="margin-top: -70px;">
	<div class="row d-flex justify-content-center">
		<img src="assets/images/SAFETY SEAL.png" style="width: 50%">
	</div>
</div> -->


<!--==================================================-->
<!-- Start Euildint Call Do Bg Area -->
<!--==================================================-->
<div class="call-do-action-area animate__slideInUp" style="display: none">
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
<div class="testimonial-area wow animate__slideInUp" style="margin-bottom: 120px">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12" id="container-testimonials">					
				<!-- start section title -->
				<!-- <div class="section-title">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>TESTIMONIALS</h4>
					</div>
					<div class="section-main-title">
						
					</div>
				</div> -->
				<!-- End section title -->
				<div class="row">
					<div class="testi_list owl-carousel text-center" style="color: black">
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“Awesome workforce. Responsible, reliable, and professional!” 
								<br>
								<br>
								<strong>(Satisfied Client)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“AMAZING!! These guys treat you like family…. Trustworthy crew, great equipment, and respectful. Kept us informed every step of the way and were able to predict problems and suggest solutions. Beautiful job! I would recommend these guys over anyone any day!” 
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“I was very impressed with the crew. They came on time and quickly collected everything that needed to go. They were pleasant and eager to help me. Can't ask for anything more!”  
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“Excellent work. Professional and timely service” 
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“This company was very time efficient and completed their job with professionalism, and on schedule. Wish I could give them a higher ranking than 5 stars because they deserve it.”  
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								“You were in a league of your own and amazing! Good work team!” 
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="testi-text">
								<p>
								
								"What an amazing, blessed, and anointed organization you have created. We will forever be grateful..."
								<br>
								<br>
								<strong>(Property Manager)</strong>
								<!-- </a> -->
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12" style="display: none">
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
<div class="brand-area " style="margin-bottom: 120px; margin-top: 120px; display: none">
	<div class="container-fluid">
		<div class="row">
			<div class="brand_list owl-carousel">
				<div class="col-lg-12 text-center">
					<a href="{{route('building')}}">
						<div class="brand-thumb" style="background-image: url('assets/images/Building.png'); background-size: contain; background-position: center center; background-repeat: no-repeat; height: 160px;">
							
						</div>	
						<h4 style="color: white">Building</h4>	
					</a>			
				</div>
				<div class="col-lg-12 text-center">
					<a href="{{route('sitework')}}">
						<div class="brand-thumb" style="background-image: url('assets/images/Sitework.png'); background-size: contain; background-position: center center; background-repeat: no-repeat; height: 160px; width: 190px">
							
						</div>	
						<h4 style="color: white">Sitework</h4>
					</a>					
				</div>
				<div class="col-lg-12 text-center">
					<a href="{{route('restoration')}}">
						<div class="brand-thumb" style="background-image: url('assets/images/Restoration.png'); background-size: contain; background-position: center center; background-repeat: no-repeat; height: 160px;">
							
						</div>	
						<h4 style="color: white">Restoration</h4>
					</a>					
				</div>
				<div class="col-lg-12 text-center">
					<a href="https://brockmountainhomes.com/" target="_blank">
						<div class="brand-thumb" style="background-image: url('assets/images/Logo BM Homes NEGATIVE.png'); background-size: contain; background-position: center center; background-repeat: no-repeat; height: 160px; width: 190px">
							
						</div>	
						<h4 style="color: white">Homes</h4>	
					</a>				
				</div>				
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Euildint Brand Area -->
<!--==================================================-->

@endsection