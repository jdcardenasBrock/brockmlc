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
        border-top: 5px solid #ddd !important;        
    }
    #mybox2:after{
        content: '';
        position: absolute;
        bottom: 0px;
        top: 0px;
        right: 5%;
        width:50%;
        border-top: 5px solid #ddd !important;        
    }
    #top-new{
        background: url(assets/images/about/Who_We_Are_News.jpg);
        background-position: center 5%; 
        background-size: 50%;
        background-repeat: no-repeat;
        background-color: #001C4E;
    }   
    /* .breatcome-area{
        height: 450px;
    }  */
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
    .blog-standard-thumb img{
        width: 65% !important;
    }
    .blog-standard-content h4 a{
        font-size: 28px; 
    }
    .section-main-title{
        font-size: 38px;
    }
    .footer-wiget-social-2 ul {
        list-style: none;
    }

    .footer-wiget-social-2 ul li {
        display: inline-block;
        margin-right: 6px;
    }

    .footer-wiget-social-2 ul li a i {
        color: #FFF;
        font-size: 20px;
        background: #266041;
        transition: .5s;
        height: 42px;
        width: 42px;
        line-height: 42px;
        text-align: center;
        border-radius: 2px;
        position: relative;
        z-index: 1;
        transition: .5s;
    }        
    h2.no-span {
        display: table;
        white-space: nowrap;
        &:before, &:after {
        border-top: 1px solid #266041;
        content: '';
        display: table-cell;
        position: relative;
        top: 0.5em;
        width: 45%;
        }
        &:before { right: 1.5%; }
        &:after { left: 1.5%; }
    }
    @media (max-width: 991.98px) {
      .breatcome-content{
        top: 82px;
        text-align: center;
      }     
    }
</style>
<!-- <div class="container"> -->
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-new">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>News</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>News</li>
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


<!--==================================================-->
<!-- Start Euildint Blog Standard Area -->
<!--==================================================-->
<div class="blog-standard-area" style="margin-top: 50px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">                    
                    <div class="section-main-title about">
                        <h2 style="color: #266041">Stay Connected</h2>
                        <!-- <h2 class="background double"><span>Double-lined title</span></h2> -->
                    </div>
                </div>
                <div class="footer-wiget-social-2 text-center mt-3">
                    <h2 class="no-span">
                        <!-- <span> -->
                        <ul>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.facebook.com/brockmlc/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="mailto:info@brockmlc.com"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                        <!-- </span> -->
                    </h2>
                </div>
            </div>            
        </div>
        <div class="row mt-5" style="background-color: #272a2c;">
            <div class="col-lg-5 col-md-12"  style="padding-left: 30px; padding-top: 35px; padding-bottom: 15px;">
                <img src="assets/images/about/Who_We_Are_News_1.jpg" width="100%" height="90%"> 
            </div>
            <div class="col-lg-7 col-md-12" style="display: flex; align-items: center; padding-top: 35px">                
                <div class="history-content wow animate__slideInUp" style="padding-left: 30px; padding-right: 30px;">
                    <h2 style="color: white; font-size: 20px; font-style: italic; margin-top: 0 !important">"Angels wearing hard hats"</h2>
                    <p style="color: white"><br><span style="color: green">"Brock Mountain Land Co.'s</span> crews came from North Carolina to build steel walls and rock barriers to protect homes and hotels in danger of being swallowed by the sea along the Daytona Beach area's storm-ravaged shoreline. The blessings these construction workers have brought to Family Renew Community while they're here, however, have some of us convinced they truly were sent from heaven..."</p>                        
                    <p style="text-align: right; font-size: 12px; line-height: 1.3; color: white">"Angels Wearing Hard Hats." Family Renew Community, <br>Tue, Jun 13, 2023 at 9:15AM
                        <br>
                        <a style="font-size: 12px; color: green" href="https://www.familyrenew.org/-Angels-wearing-hard-hats--1-17035.html" target="_blank">https://www.familyrenew.org/-Angels-wearing-hard-hats--1-17035.html</a>
                    </p>
                </div>                
            </div>           
        </div>
        <div class="row pt-5 pb-5" style="background-color: #272a2c;">
            <div id="mybox" class="col-lg-6 col-md-12" style="display: flex; align-items: center; padding-right: 0; padding-left: 30px">                
                <div class="history-content wow animate__slideInUp" style="padding-left: 0; padding-right: 30px">
                    <h2 style="color: white; font-size: 20px; font-style: italic; margin: 0 !important">"Ian and Nicole: 6 months later, Volusia recovery marked by successes, frustration, hope"</h2>
                    <div>
                        <p style="text-align: justify; color: white"><br><span style="color: green">"Brock Mountain</span>  is completing work on three commercial properties in Daytona Beach Shores, including the Seabreeze and Fantasy II condominiums, as well as a row of 30 residential beachfront properties that stretch from Frank Rendon Park to St. Kitts condominium..."</p>                        
                        <p style="text-align: right; font-size: 12px; line-height: 1.3; color: white">"Ian and Nicole: 6 months later, Volusia recovery marked by successes,<br> frustration, hope" The Daytona Beach News-Journal, <br>Mon, May 8, 2023 at 01:25PM
                            <br>
                            <a style="font-size: 12px; color: green" href="https://www.news-journalonline.com/story/news/2023/05/08/ian-nicole-6-months-after-tropical-storms-volusia-recovery-ongoing/70086055007/" target="_blank">https://www.news-journalonline.com/story/news/70086055007</a>
                        </p>
                    </div>
                </div>                
            </div>
            <div id="mybox2" class="col-lg-6 col-md-12"  style="padding-right: 30px; padding-bottom: 15px;">
                <img class="pt-5" src="assets/images/about/Who_We_Are_News_3.webp" width="100%" height="90%"> 
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Euildint Blog Standard Area -->
<!--==================================================-->
<!-- </div> -->

@endsection