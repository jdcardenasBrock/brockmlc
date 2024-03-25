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
        top: 100px;
        right: 0%;
        width: 40%;
        border-top: 5px solid #266041 !important;
        /* border-bottom: 5px solid #272a2c !important; */
    }
    #mybox2:after {
        content: '';
        position: absolute;
        bottom: 0px;
        top: 90px;
        left: 0%;
        width: 35%;
        border-top: 5px solid #266041 !important;
        /* border-bottom: 5px solid #272a2c !important; */
    }
    #top-vendor{
        background: url(assets/images/mountains.png), #272a2c;
        background-position: 100% 0%; 
        background-size: 50%;
        background-repeat: no-repeat;
    }    
    .slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}   
    .contact-title h2 {
        font-size: 20px; 
        line-height: 30px;
        color: white;
    }  
    input::placeholder, textarea::placeholder {
      color: black !important;
      opacity: 1 !important; /* Firefox */
    }
    input::-ms-input-placeholder, textarea::-ms-input-placeholder { /* Edge 12 -18 */
      color: black !important;
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
<div class="container" style="">
<!--==================================================-->
<!-- Start Euildint Blog Standard Area -->
<!--==================================================-->
<div class="blog-standard-area"> 
    <div class="container">
        <div class="row pt-150" style="background: gray;" id="mybox">
            <div class="col-lg-8 offset-lg-2 col-md-12 mt-5 mb-5">
                <div class="row contact" style="background: #272a2c">
                    <div class="contact-box">
                        <div class="contact-title">
                            <h2>As a trusted general contractor, we are always seeking reliable vendors to collaborate with us. Becoming a vendor with us opens doors for new projects to
                            enhance our communities. Join us today!</h2>
                        </div>
                        <form action="https://formspree.io/f/myyleorq" method="POST" id="it-form">
                            <div class="row">
                                <div class="col-lg-8 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Business Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="date" name="name" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Business Description">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="TIN XX-XXXXXXX">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Contact Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="email" name="name" placeholder="Contact Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Contact Phone">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-5">
                                    <div class="form-box-button inner">
                                        <button type="Submit">Next</button>
                                    </div>
                                </div>
                            </div>
                        </from>
                    </div>
                </div>
            </div>
            <div id="mybox2" class="container text-center p-5" style="background-color: gray">
                <div class="eulding-btn about">
                    <a href="{{route('contact')}}" style="background-color: gray; font-size: 24px">
                        <span style="color: black">Questions?</span> <br><span style="color: white">Contact Us</span>
                        <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection