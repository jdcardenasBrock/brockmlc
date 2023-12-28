@extends('layouts.website')

@section('content')
<style>
	#top-contact{
        background: url(assets/images/resource/contact-recortada_copia.jpg);
    }
	.slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}
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

	<!--==================================================-->
	<!-- Start Euildint About Area -->
	<!--==================================================-->
	<div class="about-area style-two wow animate__slideInUp" style="margin-top: 210px;">
		<div class="container">
		<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="about-thumb style-two wow animate__slideInUp">
						<img src="assets/images/resource/Contact 594x644.jpg" alt="">
						<!-- statr about counter -->
						<!-- <div class="about-counter">
							<div class="about-numbar">
								<h4 class="counter">25</h4>
								<span>+</span>
							</div>
							<div class="about-counter-text">
								<h5>Years of Experience</h5>
							</div>
						</div> -->
						<!-- End about counter -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="section-title">
						<div class="section-shape">
							<img src="assets/images/resource/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Contact Information</h4>
						</div>
						<div class="section-main-title about">
							<h2></h2>
						</div>
					</div>
					<div class="about-content wow animate__slideInUp">
						<div class="about-discribtion">
							<p>Brock Mountain Land Company, LLC provides clients the very best in excavation and building services. We take pride and are very passionate in the detail of each job. Quality, integrity and expertise enables us to make complex projects simple. Building long term relationships with our clients is key to the success of our business.</p>
						</div>
						
						<!-- <div class="about-bottom-building">
							<div class="eulding-btn about">
								<a href="https://www.realtor.com/realestateandhomes-detail/M9419213114">View Our Latest Listing on Realtor.com<i class="bi bi-arrow-up-right-circle-fill"></i></a>
							</div>
							<div class="eulding-btn about mt-3">
								<a href="https://brockmountainhomes.com/">Visit Brock Mountain Homes <i class="bi bi-arrow-up-right-circle-fill"></i></a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint About Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Euildint Contact Us Area -->
	<!--==================================================-->
	<div class="contact-us-area">
		<div class="container">
			<div class="row mb-150">
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
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
				<div class="col-lg-4 col-md-6">
					<div class="contact-single-box two">
						<div class="contact-icon">
							<i class="bi bi-geo-alt"></i>
						</div>
						<div class="contact-content">
							<h4>Address</h4>
							<span>PO Box 598, </span>
							<span>Barnardsville, NC 28709 USA</span>
						</div>
					</div>
				</div>
			</div>			
			<div class="row contact">
				<div class="contact-box">
					<div class="contact-title">
						<h2>Do you have any question?</h2>
						<h2>Feel free to contact us</h2>
					</div>
					<form action="https://formspree.io/f/myyleorq" method="POST" id="it-form">
						<div class="row">
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
									<input type="text" name="phone" placeholder="Phone">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="email" placeholder="Email Address">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="website" placeholder="Website">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-box">
									<textarea name="massage" id="massage" cols="30" rows="10" placeholder="Comment"></textarea>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-box-button inner">
									<button type="Submit">Send Message</button>
								</div>
							</div>
						</div>
					</form>
					<div id="status"></div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint Contact Us Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Euildint Map Area -->
	<!--==================================================-->
	<div class="map-area" style="margin-bottom:120px">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.google.com/maps/d/embed?mid=1VzrD0aebBTEuSNlMzEIoqP29E829zCM&ehbc=2E312F&noprof=1" width="1920" height="608"  frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" class="embed-responsive-item"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Euildint Map Area -->
	<!--==================================================-->

@endsection