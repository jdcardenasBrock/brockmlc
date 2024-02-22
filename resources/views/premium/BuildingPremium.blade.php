@extends('layouts.website_auth') 
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
		#top-building{ 
			background-position: 45% 290%;                      
            background-size: 300%;
        }
		#top-building{ 
			background-position: 45% 290%;                      
            background-size: 300%;
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
        #top-building{ 
			background-position: 45% 290%;                      
            background-size: 300%;
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
                        <h1>Building Premium</h1>
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
            <h1 style="color: goldenrod;">This page is premium</h1> 
		</div>
	</div>
</div>
@endsection