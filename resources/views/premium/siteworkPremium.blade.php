@extends('layouts.website_auth')
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
                        <h1>Sitework Premium</h1>
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
           <h1 style="color: goldenrod;">This page is premium</h1> 
        </div>
    </div>
</div>

@endsection