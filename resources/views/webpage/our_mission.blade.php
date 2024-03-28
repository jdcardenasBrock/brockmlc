@extends('layouts.website') 
@section('content')
<style>
    #mybox, #mybox2{
        position: relative;
    }
    #mybox:after {
        content: '';
        position: absolute;
        bottom: 0px;
        top: 0px;
        left: 5%;
        width:50%;
        border-top: 5px solid #266041 !important;
        border-bottom: 5px solid #266041 !important;
    }
    #mybox2:after{
        content: '';
        position: absolute;
        bottom: 0px;
        top: 0px;
        right: 5%;
        width:50%;
        border-top: 5px solid #ddd !important;
        border-bottom: 5px solid #ddd !important;
    }
    #top-our_mission{
        background: url(assets/images/about/Who_We_Are_About_Us_3.jpg);  
        background-position: center center; 
        background-size: cover;
        background-repeat: no-repeat;     
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
    .history-content p {
        font-size: 26px;
        line-height: 36px;
    }
    .history-content p{
        font-size: 20px;
        line-height: 30px;
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
<!-- <div class="container" style=""> -->
<div class="breatcome-area" id="top-our_mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>About Us</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>About Us</li>
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
<div class=" animate__slideInUp" style="margin-bottom: 50px;">
    <!-- <div class="container"> -->
        <div class="row mt-70">
            <div class="col-lg-7 col-md-12 d-flex align-items-center" id="mybox" style="padding-left: 0; height: 390px;">
                <div class="history-content">
                    <!-- <h4><a href="contact.php">We Started From 1999</a></h4> -->
                    <p style="color: black; margin-top: 0; padding-right: 30px; text-align: justify; padding-left: 60px;">
                    Established in Asheville, North Carolina,
                    Brock Mountain has proudly provided general
                    contractor services to the community. Our
                    operations have grown  nationwide with
                    exceptional employees, outstanding trade
                    partners, and steadfast support from our
                    community. With that growth, we've become
                    equipped to handle a wide range of construction
                    projects, ensuring professionalism and care
                    every step of the way.
                    </p>
                    <!-- <a href="contact.php">Discover More <i class="bi bi-arrow-right"></i></a> -->
                </div>
            </div>
            <div class="col-lg-5 col-md-6" style="padding-right: 60px;">                                
                <img src="assets/images/about/Who We Are _ About Us.jpg" width="100%" height="390px">                
            </div>           
            <div class="col-lg-12 mt-5" style="background-color: #272a2c; padding-bottom: 30px; padding-left: 30px; padding-right: 30px;">
                <div class="row" style="padding-top: 32px">
                    <div class="col-lg-6 col-md-6">
                        <div class="counter-area" style="margin-left: 30px"></div>                                               
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center" id="mybox2">
                        <div class="">
                            <div class="history-content">
                                <!-- <h4><a href="contact.php">Some data about us</a></h4> -->
                                <p style="text-align: justify; color: white; margin-top: 0; padding-left: 30px; padding-right: 30px;">
                                Rooted in principles of respect and
                                transparency, we are grateful to be in a position
                                that allows us to build lasting structures that
                                enhance lives and  revitalize communities.
                                Through every endeavor, we aim to leave a
                                positive impact and develop lasting partnerships
                                that extend beyond the completion of a project.
                                While we allow our reputation to speak for itself,
                                we truly believe our success lies in our core
                                values of Safety, Quality, and Integrity.   
                                </p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    <!-- </div> -->
</div>
<!--==================================================-->
<!-- End Euildint History Area -->
<!--==================================================--> 
<!-- </div> -->
@endsection