@extends('layouts.website') 
@section('content')
<style> 
    #top-building{
        background: url(assets/images/building/bui_1.jpg);
		background-position: center center; 
        background-size: cover;
    }
    #video-container-building{
        background: url(assets/images/building/Bui_4.jpg);
		background-position: center center; 
        background-size: cover;
    }
    .slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}
    .vbox-inline{
		width: 960px;
    	height: 720px;
		margin-top: -200px !important;
		overflow: hidden; 
	}
	.vbox-inline video{
		margin-top: 15%;
		margin-left: 10%;
		width: 80% !important;
		height: 80%;
	}
	.eulding-btn{
		display: block;		
	}
	.eulding-btn a{
		width: 415px;
		text-align: center;
	}
	#img-experience{
		background: url(assets/images/building/bui_5.jpg);
		background-position: center center;
		background-size: cover;
		height: 644px;
	}
	.about-thumb img{
		width: 60%;
	}
	.section-main-title{
        font-size: 38px;
    }	
    @media (max-width: 991.98px) {
      .breatcome-content{
        top: 82px;
        text-align: center;
      }     
	  .about-shape{
		display: block;
	  }
	  .section-main-title{
		font-size: 21px;
		}  
		.section-title{
		text-align: center;
		}
		.call-do-action-area.style-two{
			height: 270px;
        } 
        .call-do-title.style-two h2  {
            text-align: center;
        }
        .single-video.style-three.text-center{
            top: 20px;
        } 
        .video-icon a {
			height: 80px;
			width: 80px;
			line-height: 63px;
		}

		.video-icon a i {			
			font-size: 36px;
		}

		.about-thumb.style-two img{
			width: 100%;
			/* height: 234px; */
		}

		.eulding-btn a{
			width: 375px;
		}
		#img-experience{
			height: 234px;
		}
    }

	@media (min-width: 768px) and (max-width: 991px){ 
        .single-video.style-three.text-center{
            top: -8px !important;
        }
		.about-counter{
			height: 190px;
		}
		img.d-sm-block{
			display: inline-block !important;
		}
    }
	
</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-building">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Building</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Building</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint Breatcome Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Euildint About Area -->
<!--==================================================-->
<div class="about-area inner-page wow animate__slideInUp">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="section-title d-lg-none d-sm-block mb-5">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>What else we do</h4>
					</div> 
					<div class="section-main-title about">
						<h2>Specialist in commercial building</h2>
					</div>
				</div>
				<div class="about-thumb wow animate__slideInUp">
					<img src="assets/images/building/Bui_2.jpg" style="width: 48%">
					<img class="d-lg-none d-sm-block" src="assets/images/building/Bui_3.jpeg" style="width: 51%">
					<div class="about-shape d-none d-lg-block">
						<img src="assets/images/building/Bui_3.jpeg" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-12">
				<div class="section-title d-none d-lg-block">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>What else we do</h4>
					</div>
					<div class="section-main-title about">
						<h2>Specialist in commercial building</h2>
					</div>
				</div>
				<div class="about-content wow animate__slideInUp">
					<div class="about-discribtion">
						<p>Our premier project management solutions are trusted by industrial, commercial, and municipalities across the United States. Brock Mountain strives to deliver optimal performance, rapid response, and predictable results on budget and on time.
							<br> No matter the project, we have the experience, equipment, and ability to meet your needs</p>
					</div>
					<!-- start process bar -->
					<!-- <div class="process-ber-plugin">
						<span class="process-bar">Customer Satisficed </span>
						<div id="bar1" class="barfiller">
							<div class="tipWrap" style="display: inline;">
								<span class="tip" style="left: 468.814px; transition: left 7s ease-in-out 0s;">100%</span>
							</div>
							<span class="fill" data-percentage="100" style="background: rgb(22, 181, 151); width: 505.791px; transition: width 7s ease-in-out 0s;"></span>
						</div>  
						<span class="process-bar">Residential Roofing</span>
						<div id="bar2" class="barfiller">
							<div class="tipWrap" style="display: inline;">
								<span class="tip" style="left: 403.254px; transition: left 7s ease-in-out 0s;">90%</span>
							</div>
							<span class="fill my-class" data-percentage="90" style="background: rgb(22, 181, 151); width: 438.352px; transition: width 7s ease-in-out 0s;"></span>
						</div>
					</div> -->
					<!-- End process bar -->						
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
<div class="call-do-action-area style-two wow animate__slideInUp" id="video-container-building" style="margin-top: 30px;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-12">
				<div class="call-do-title style-two  d-none d-lg-block">
					<h2>Brock Mountain <br>Land Company, LLC</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="single-video style-three text-center">
					<div class="video-icon style-three">						
						<div id="building_video" style="display:none; width: 90%">
							<video controls preload="metadata">
								<source src="assets/videos/Commercial_Building_Division_Promo.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
						<a class="video-vemo-icon venobox vbox-item" data-autoplay="true" data-vbtype="inline" href="#building_video"><i class="bi bi-play"></i></a>							
					</div>
					<div class="call-do-title d-lg-none d-sm-block">
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
<!-- Start Euildint About Area -->
<!--==================================================-->
<div class="about-area style-two wow animate__slideInUp" style="margin-top: 120px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="section-title mb-5 d-lg-none d-sm-block">
					<div class="section-shape">
						<img src="assets/images/resource/section-shape.png" alt="">
					</div>
					<div class="section-sub-title">
						<h4>Superior Construction</h4>
					</div>
					<div class="section-main-title about">
						<h2>More Than 25 Years Of Experience</h2>
					</div>
				</div>
				<div class="about-thumb style-two wow animate__slideInUp" id="img-experience">
					<!-- <img src="assets/images/building/bui_5.jpg" alt=""> -->
					<!-- statr about counter -->
					<div class="about-counter">
						<div class="about-numbar">
							<h4 class="counter">25</h4>
							<span>+</span>
						</div>
						<div class="about-counter-text">
							<h5>Years of Experience</h5>
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
						<h2>More Than 25 Years Of Experience</h2>
					</div>
				</div>
				<div class="about-content wow animate__slideInUp">
					<div class="about-discribtion">
						<p>With a keen commitment to detail & budget, Brock Mountain provides residential building services throughout the Southeast. Our commitment is simple: We treat each residential project as if it were our own.</p>
					</div>
					
					<div class="about-bottom-building text-center">
						<div class="eulding-btn about">
							<a href="https://www.realtor.com/realestateandhomes-detail/M9419213114">View Our Latest Listing on Realtor.com<i class="bi bi-arrow-up-right-circle-fill"></i></a>
						</div>
						<div class="eulding-btn about mt-3">
							<a href="https://brockmountainhomes.com/">Visit Brock Mountain Homes <i class="bi bi-arrow-up-right-circle-fill"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Euildint About Area -->
<!--==================================================-->
@endsection