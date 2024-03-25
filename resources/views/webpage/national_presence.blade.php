@extends('layouts.website') 
@section('content')
<style>
    #top-national-presence{
        background: url(assets/images/about/Who_We_Are_National_Presence.jpg);
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
<!-- <div class="container" style=""> -->
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-national-presence">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>National Presence</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>National Presence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Euildint Map Area -->
<!--==================================================-->
<div class="heistory-area" style="padding-bottom:115px; background-color: #272a2c;">
    <div class="container">
      <div class="row" style="color: white; padding-top: 70px; padding-bottom: 50px; padding-left: 0; padding-right: 0; background-color: #272a2c;">
            <div class="col-lg-6 offset-lg-1 d-flex align-items-end" style="font-size: 20px; line-height: 30px">                
                <!-- <div class="section-title">                    -->
                    <!-- <p style="font-size: 20px; line-height: 30px; padding-left: 30px"> -->
                    Our team at Brock Mountain stands out for its extensive reach and ability to tackle projects across the
                    United States. We are proud to have the capacity to mobilize swiftly, ensuring our expert teams and
                    resources are readily available wherever our projects demand. Our commitment to excellence is not
                    limited to our own communities but is available nationwide.
                    <!-- </p>                     -->
                <!-- </div>                 -->
            </div>
            <div class="col-lg-5 text-center">
                <img src="assets/images/logo_negativo.png" width="200px">
            </div>
        </div>
        <div class="row" style="background-color: #272a2c;">
            <div class="section-main-title text-center" style="margin-bottom: 40px; margin-top: 40px">
                <h2 style="color: white">Locations of Our Projects Throughout The U.S.</h2>
            </div>
            <img class="" src="assets/images/Mapa_USA (2).png" style="width: 90%; margin-left: 6%">
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint Map Area --> 
<!--==================================================--> 
<!-- </div> -->

@endsection