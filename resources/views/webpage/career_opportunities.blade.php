@extends('layouts.website') 
@section('content')
<style>
    #top-career{
        background: url(assets/images/resource/Career_bg.jpg);
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
    .section-main-title{
        font-size: 38px;
    }	
    @media (max-width: 991.98px) {
        #top-career{
            background-position: 40%;
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
</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-career">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Career Opportunities</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Career Opportunities</li>
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
<!-- Start Euildint Service Details Area -->
<!--==================================================-->
<div class="service-details-area wow animate__slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2>This page is under construction.</h2>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Euildint Service Service Details Area -->
<!--==================================================-->
@endsection
