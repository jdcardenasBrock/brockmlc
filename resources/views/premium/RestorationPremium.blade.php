@extends('layouts.website_auth') 
@section('content')
<style>
    #top-restoration{
        background: url(assets/images/restoration/Rest_1.jpg);
        background-position: top right; 
        background-size: cover;
    }
    #video-container-restoration{
        background: url(assets/images/restoration/Rest_3-video.jpg);
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
    .widget-categories-menu ul li a{
        cursor: pointer !important;
    }.about-thumb img{
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
	  .section-main-title{
		font-size: 21px;
		}  
		.section-title{
		text-align: center;
		}
        .service-details-thumb{
            margin-bottom: 50px;
        }
        .blog-standard-area{
            /* padding-top: 70px; */
            padding-bottom: 120px;
        }
        #top-restoration{
            background: url(assets/images/restoration/Rest_1.jpg);
            background-position: center center; 
            background-size: cover;
        }
    }

    @media (min-width: 768px) and (max-width: 991px){
        
        #top-restoration{
            background: url(assets/images/restoration/Rest_1.jpg);
            background-position: center center; 
            background-size: cover;
        }
    
    }

</style>
<!--==================================================--> 
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-restoration">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Restoration Premium</h1>
                    </div>
                    <div class="bratcome-text">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Restoration</li>
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
            <h1 style="color: goldenrod;">This page is premium</h1> 
        </div>
    </div>
</div>

@endsection