@extends('layouts.website') 
@section('content')
<style>
    #top-our_mission{
        background: url(assets/images/resource/our_mission_bg.jpg);  
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
    }
</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-our_mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Our Mission</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Our Mission</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Euildint History Area -->
<!--==================================================-->
<div class="heistory-area animate__slideInUp" style="margin-bottom: 120px;">
    <div class="container">
        <div class="row history-bg">
            <div class="col-lg-4 col-md-12">
                <!-- start section title -->
                <div class="section-title">
                    <div class="section-shape">
                        <img src="assets/images/resource/section-shape.png" alt="">
                    </div>
                    <div class="section-sub-title">
                        <h4>our history</h4>
                    </div>
                    <div class="section-main-title">
                        <h2>Company History, <br>Present And The Future</h2>
                    </div>
                </div>
                <!-- End section title -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="history-single-box">
                    <div class="history-content">
                        <h4><a href="contact.php">We Started From 1999</a></h4>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus convallis finibus. Aenean volutpat accumsan consequat. Nulla ut felis ullamcorper, dapibus sem vel, fermentum arcu. Aliquam porttitor hendrerit ligula, molestie blandit risus suscipit nec. Cras maximus enim mauris.
                        </p>
                        <!-- <a href="contact.php">Discover More <i class="bi bi-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="history-items-box">
                    <div class="history-items-thumb">
                        <img src="assets/images/home/Home_10-Our History1.jpg" alt="">
                        <div class="history-items-content">
                            <div class="history-text">
                                <h4 style="color: white">Our Goal is To Make The Future Work Easier</h4>		
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row mt-120">
                    <div class="col-lg-5 col-md-6">
                        <div class="history-single-box">
                            <div class="history-content">
                                <h4><a href="contact.php">Some data about us</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus convallis finibus. Aenean volutpat accumsan consequat. Nulla ut felis ullamcorper, dapibus sem vel, fermentum arcu. Aliquam porttitor hendrerit ligula, molestie blandit risus suscipit nec. Cras maximus enim mauris. Maecenas viverra tincidunt mauris id elementum. Ut ex arcu, feugiat hendrerit urna sodales, mattis fermentum tellus.</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="counter-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <!-- start counter single box -->
                                    <div class="counter-single-box">
                                        <div class="counter-numbar">
                                            <h4 class="counter">39</h4>
                                        </div>
                                        <div class="counter-content">
                                            <h5>Different Kind of Products</h5>
                                        </div>
                                    </div>
                                    <!-- End counter single box -->
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <!-- start counter single box -->
                                    <div class="counter-single-box">
                                        <div class="counter-numbar">
                                            <h4 class="counter">1850</h4>
                                        </div>
                                        <div class="counter-content">
                                            <h5>Expert Engineers Are Working</h5>
                                        </div>
                                    </div>
                                    <!-- End counter single box -->
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <!-- start counter single box -->
                                    <div class="counter-single-box">
                                        <div class="counter-numbar">
                                            <h4 class="counter">40</h4>
                                            <span>K</span>
                                        </div>
                                        <div class="counter-content">
                                            <h5>Export Valule in Last 10 Years</h5>
                                        </div>
                                    </div>
                                    <!-- End counter single box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint History Area -->
<!--==================================================--> 
@endsection