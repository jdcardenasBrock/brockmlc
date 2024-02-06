@extends('layouts.website')
@section('content') 
<style>
    #top-sitework{
        background: url(assets/images/resource/Sitework_bg.jpg);
        background-position: center center; 
        background-size: cover;
    }    
    #video-container-restoration{
        background: url(assets/images/restoration/Rest_3-video.jpg);
        background-repeat: no-repeat;
        background-position: bottom center; 
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
    .section-main-title{
        font-size: 38px;
    }
    @media (max-width: 991.98px) {
      .breatcome-content{
        top: 82px;
        text-align: center;
      } 
      .section-main-title{
            font-size: 21px;
        }  
        .section-title{
            text-align: center;
        }
        .service-details-thumb{
            margin-bottom: 50px;
        } 
        .single-video{
            top: -128%;
        } 
        .call-do-action-area{
			height: 250px;
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
        .blog-standard-area{
            padding-top: 120px;
            padding-bottom: 120px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px){ 
        .single-video.style-three.text-center{
            top: -10px !important;
        }
        .call-do-action-area{
			height: 503px;
		}
        .single-video{
            top: -98%;
        }
        .video-icon a {
            height: 120px;
            width: 120px;
            line-height: 105px;
        }
        .video-icon a i {
            color: #ffffff;
            font-size: 76px;
        }
    }

</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-sitework">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Sitework</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Sitework</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="service-details-area wow animate__slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- start section title -->
                        <div class="section-title d-lg-none d-sm-block">
                            <div class="section-shape">
                                <img src="assets/images/resource/section-shape.png" alt="">
                            </div>
                            <div class="section-sub-title">
                                <h4>SERVICES</h4>
                            </div>
                            <div class="section-main-title" style="margin-bottom: 50px">
                                <h2>PROFESSIONAL & RELIABLE SITEWORK SERVICES</h2>
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- start service details single box -->
                        <div class="service-details-single-box mb-30">
                            <!-- <div class="service-details-content d-lg-none d-sm-block">
                                <h4><a href="#">PROFESSIONAL & RELIABLE SITEWORK SERVICES</a></h4>
                            </div> -->
                            <div class="service-details-thumb">
                                <img src="assets/images/restoration/Rest_2-profess3.jpg" alt="">
                            </div>
                            <div class="service-details-content" style="margin-top: 40px;">
                                <h4 class="d-none d-lg-block"><a href="#">PROFESSIONAL & RELIABLE SITEWORK SERVICES</a></h4>
                                <p class="mt-2">Our sitework teams & equipment accessibility combined with our proven expertise is another reason why Brock Mountain is trusted nationwide. Our team can help facilitate any project on time and within budget.</p>
                            </div>
                        </div>
                        <!-- End service details single box -->
                    </div>                                                           
                </div>
            </div>                        
            <div class="col-lg-4 col-md-6">                
                <!-- End widget search box -->
                <div class="widget-categories-box"> 
                    <div class="widget-catagories-title">
                        <h4>SITEWORK SERVICES INCLUDE</h4> 
                    </div>
                    <!-- widget categories menu -->
                    <div class="widget-categories-menu">
                        <ul>
                        <li>Stormwater Install & Maintenance</li>	
                            <li>French Drain Install & Maintenance </li>
                            <li>Trench Drain Install & Maintenance </li>
                            <li>Forestry Mulching & Land Clearing </li>
                            <li class="d-lg-block d-sm-block d-md-none">Disaster Clean-up </li>
                            <li class="d-lg-block d-sm-block d-md-none">Excavation, Import & Export </li>
                            <li class="d-lg-block d-sm-block d-md-none">Engineering & Design Build Solutions </li>
                            <li class="d-lg-block d-sm-block d-md-none">Concrete Flatwork / Curb & Gutter </li>
                            <li class="d-lg-block d-sm-block d-md-none">And so much more </li>
                        </ul>
                    </div>
                </div>                
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-block d-lg-none">                
                <!-- End widget search box -->
                <div class="widget-categories-box">
                    <!-- <div class="widget-catagories-title">
                        <h4>SITEWORK SERVICES INCLUDE</h4>
                    </div> -->
                    <!-- widget categories menu -->
                    <div class="widget-categories-menu">
                        <ul>
                            <li>Disaster Clean-up </li>
                            <li>Excavation, Import & Export </li>
                            <li>Engineering & Design Build Solutions </li>
                            <li>Concrete Flatwork / Curb & Gutter </li>
                            <li>And so much more </li>
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
<!-- Start Euildint Call Do Bg Area -->
<!--==================================================-->
<!-- assets/videos/Brock_Mountain_Sitework.mp4 -->
<div class="call-do-action-area animate__slideInUp" id="video-container-restoration">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-video text-center">
					<div class="video-icon">
						<div id="building_video" style="display:none; width: 90%">
							<video controls preload="metadata">
								<source src="assets/videos/Brock_Mountain_Sitework.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
						<a class="video-vemo-icon venobox vbox-item" data-autoplay="true" data-vbtype="inline" href="#building_video"><i class="bi bi-play"></i></a>							
					</div>
					<div class="call-do-title">
						<h2>Sitework Division</h2>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End Euildint Call Do Bg Area -->
<!--==================================================-->
<div class="blog-standard-area">
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-10">
                <!-- start blog single box -->
                <div class="blog-standard-box">
                    <div class="row">
                        <div class="blog_list owl-carousel">
                            @for ($item=1;$item<=10;$item++)
                            <div class="col-lg-12">
                                <div class="blog-standard-thumb">
                                    <img src="assets/images/restoration/SiteworkGalleryImages_{{$item}}.jpg" alt=" ">
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <!-- End blog single box -->
            </div>        
        </div>
    </div>
</div>
@endsection