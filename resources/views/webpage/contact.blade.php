@extends('layouts.website')

@section('content')
<style>
	#top-contact{
        background: url(assets/images/logo_negativo.png), #272a2c;
        background-position: 100% 0%; 
        background-size: 50%;
        background-repeat: no-repeat;
    }
	.slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}
	.contact-us-area{
		padding-top: 0px;
	}

  .contact-title h2 {
        font-size: 20px; 
        line-height: 30px;
        color: white;
    }
  .section-main-title{
        font-size: 38px;
    }
    .contact-icon i, .contact-content h4,span{
      color: white !important;
    }	
    .contact-content span{
      font-size: 20px;
    }
    .row.contact, .row.contact-box{
      padding-right: 0 !important;
    }
    .contact-box .col-lg-3{
      padding-right: 0;
    }

    input::-webkit-input-placeholder {
      color: black;
      font-weight: bold;
    }

    input::placeholder, textarea::placeholder {
      color: black !important;
      opacity: 1 !important; /* Firefox */
    }
    input::-ms-input-placeholder, textarea::-ms-input-placeholder { /* Edge 12 -18 */
      color: black !important;
    }
    /* @media (max-width: 991.98px) {
      #top-contact{        
        background-position: 30% 105%; 
        background-size: 280%;
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
    }

    @media (min-width: 768px) and (max-width: 991px){
        
       #img-contact-2{
        width: 100%;
       }
    
    } */

</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12"> 
				<div class="breatcome-content">
					<div class="breatcome-title">
						<h1>Contact Us</h1>
					</div>
					<div class="bratcome-text">
						<ul>
							<li><a href="/">Home</a></li>
							<li>Contact</li>
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

<div class="blog-standard-area">
    <div class="container">
        <div class="row" style="background: gray;">
            <div class="col-lg-12 col-md-12">
                <div class="row contact" style="background: #272a2c">               
                    <div class="contact-box row">
                        <div class="contact-title">
                            <h2>We look forward to the opportunity to speak with you about your next project or answer any questions.</h2>
                        </div>
                        <form class="col-lg-9" action="https://formspree.io/f/myyleorq" method="POST" id="it-form" style="">
                            <div class="row pt-5 p-3" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(assets/images/about/Work_With_Us_Contact_Us.jpg); background-size: cover;">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="First Name">
                                    </div> 
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="email" name="name" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-box">
                                        <textarea class="form-control" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-5">
                                    <div class="form-box-button inner">
                                        <button type="Submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3" style="display: flex; align-items: top">
                          <div class="row">
                            <div class="col-lg-12 col-md-6 mt-5">
                              <div class="contact-single-box">
                                <div class="contact-icon">
                                  <i class="bi bi-telephone-x"></i>
                                </div>
                                <div class="contact-content">
                                  <h4>Phone Number</h4>
                                  <span>(888) 774-6498</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mt-5">
                              <div class="contact-single-box">
                                <div class="contact-icon">
                                  <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="contact-content">
                                  <h4>E-mail</h4>
                                  <span>info@brockmlc.com</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mt-5">
                              <div class="contact-single-box two">
                                <div class="contact-icon">
                                  <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-content">
                                  <h4>Address</h4>
                                  <span>PO Box 598, </span>
                                  <span>Barnardsville, <br>NC 28709 USA</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection