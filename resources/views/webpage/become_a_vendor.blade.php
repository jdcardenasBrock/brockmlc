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