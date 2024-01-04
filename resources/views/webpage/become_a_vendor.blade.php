@extends('layouts.website') 
@section('content')
<style>
    #top-vendor{
        background: url(assets/images/resource/Vendor_bg.jpg);
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
    .service-details-thumb img{
        width: 65% !important;
    }
    .blog-standard-content h4 a{ 
        font-size: 28px;
    }
    .about-thumb img{ 
		width: 60%;
	}
	.section-main-title{
        font-size: 38px;
    }

    @media (max-width: 991.98px) {
        #top-vendor{            
            background-position: 80% 130%;
            background-size: 300%;
            background-repeat: no-repeat;
        }  
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
        .service-details-thumb img{
            width: 100% !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px){
        
        #top-vendor{            
            background-position: 80% 130%;
            background-size: 190%;
            background-repeat: no-repeat;
        } 
    
    }

</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-vendor">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Become a Vendor</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Become a Vendor</li>
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
<!-- Start Euildint Service Details Area -->
<!--==================================================-->
<div class="service-details-area wow animate__slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- start service details single box -->
                        <div class="service-details-single-box mb-30">
                            <div class="service-details-thumb mb-5">
                                <img src="assets/images/service/service-details1.jpg" alt="">
                            </div>
                            <div class="service-details-content">
                                <h4><a href="service-details.html">Become a Vendor</a></h4>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum a quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed sed efficitur turpis gilla sed sit amet eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a</p>
                            </div>
                        </div>
                        <!-- End service details single box -->
                    </div>                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">            
                <div class="widget-categories-box">
                    <div class="widget-catagories-title">
                        <h4>Required Services</h4>
                    </div>
                    <!-- widget categories menu -->
                    <div class="widget-categories-menu">
                        <ul>
                            <li>Business Solution
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a>< -->
                            </li>	
                            <li>Expert Mechanical
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a> -->
                            </li>
                            <li>Architecture & Building
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a> -->
                            </li>
                            <li>Construction Management
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a> -->
                            </li>
                            <li>Apartment Design
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a> -->
                            </li>
                            <li>Facade Engineering
                                <!-- <span><i class="bi bi-chevron-right"></i></span></a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Euildint Service Service Details Area -->
<!--==================================================-->

@endsection