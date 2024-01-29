@extends('layouts.website')
@section('content') 
<style>
    #top-new{
        background: url(assets/images/resource/news_bg.jpg);
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
    .blog-standard-thumb img{
        width: 65% !important;
    }
    .blog-standard-content h4 a{
        font-size: 28px;
    }
    .section-main-title{
        font-size: 38px;
    }
    @media (max-width: 991.98px) {
      .breatcome-content{
        top: 82px;
        text-align: center;
      }     
    }
</style>
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
<div class="blog-standard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">                                        
                    <div class="col-lg-12 mb-40">
                        <!-- start blog single box -->
                        <div class="blog-standard-box">
                            <div class="blog-standard-thumb">
                                <img src="assets/images/blog/blog-standard2.png" alt="">
                            </div>
                            <div class="blog-standard-meta">
                                <span>By Admin</span>
                                <span>17 Aug 2023 </span>
                                <span class="meta">Construction</span>
                            </div>
                            <div class="blog-standard-content">
                                <h4><a href="#">All the Greatest Moments of Thoroughbred</a></h4>
                                <p>Why Roofing are factmake 17 Reason EasierForesee the pain & trouble that are bounds too ensue equalidea off denouncing pleasures and praising pain was borncomplete account and expound the actual teachings the great the master-builder of human happiness. In a free hour...</p>
                            </div>                            
                        </div>
                        <!-- End blog single box -->
                    </div>
                    <div class="col-lg-12 mb-20">
                        <!-- start blog single box -->
                        <div class="blog-standard-box">
                             <div class="blog-standard-thumb">
                                <img src="assets/images/blog/blog-standard2.png" alt="">
                            </div>
                            <div class="blog-standard-meta">
                                <span>By Admin</span>
                                <span>17 Aug 2023 </span>
                                <span class="meta">Construction</span>
                            </div>
                            <div class="blog-standard-content">
                                <h4><a href="#">All the Greatest Moments of Thoroughbred</a></h4>
                                <p>Why Roofing are factmake 17 Reason EasierForesee the pain & trouble that are bounds too ensue equalidea off denouncing pleasures and praising pain was borncomplete account and expound the actual teachings the great the master-builder of human happiness. In a free hour...</p>
                            </div>                            
                        </div>
                        <!-- End blog single box -->
                    </div>
                    <div class="col-lg-12">
                        <div class="as-pagination text-center">
                            <ul>
                                <li><a href="Blog-details.html">1</a></li>
                                <li><a href="Blog-details.html">2</a></li>
                                <li><a href="Blog-details.html"><i class="bi bi-chevron-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <!-- start widget search box -->
                <div class="widget_search box">
                    <form action="#" method="get">
                        <input type="text" name="s" value="" placeholder="Search Here" title="Search for:">
                        <button type="submit" class="icons">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- End widget search box -->
                <div class="widget-categories-box">
                    <!-- categories title -->
                    <div class="widget-catagories-title">
                        <h4> Popular Post </h4>
                    </div>
                    <div class="sidber-widget-recent-post mb-30">
                        <div class="recent-widget-thumb">
                            <img src="assets/images/blog/recen1.png" alt="">
                        </div>
                        <div class="recent-widget-content">
                            <div class="recent-widget-meta">
                                <span><i class="bi bi-calendar-event"></i> June 13</span>
                                <span><i class="bi bi-chat-left"></i> (05)</span>
                            </div>
                            <div class="recent-widget-title">
                                <h4><a href="#">This Place Really Place For Awesome Moment</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="sidber-widget-recent-post mb-30">
                        <div class="recent-widget-thumb">
                            <img src="assets/images/blog/recen2.png" alt="">
                        </div>
                        <div class="recent-widget-content">
                            <div class="recent-widget-meta">
                                <span><i class="bi bi-calendar-event"></i> June 13</span>
                                <span><i class="bi bi-chat-left"></i> (05)</span>
                            </div>
                            <div class="recent-widget-title">
                                <h4><a href="#">This Place Really Place For Awesome Moment</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="sidber-widget-recent-post">
                        <div class="recent-widget-thumb">
                            <img src="assets/images/blog/recen3.png" alt="">
                        </div>
                        <div class="recent-widget-content">
                            <div class="recent-widget-meta">
                                <span><i class="bi bi-calendar-event"></i> June 13</span>
                                <span><i class="bi bi-chat-left"></i> (05)</span>
                            </div>
                            <div class="recent-widget-title">
                                <h4><a href="#">This Place Really Place For Awesome Moment</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-categories-box">
                    <!-- categories title -->
                    <div class="widget-catagories-title">
                        <h4> Popular Tags </h4>
                    </div>
                    <div class="widget-tags">
                        <a href="#">Services</a>
                        <a href="#">Business</a>
                        <a href="#">Grooming</a>
                        <a href="#">Breeding</a>
                        <a href="#">Growth</a>
                        <a href="#">Stable</a>
                        <a href="#">Education</a>
                        <a href="#">America</a>
                        <a href="#">Maintenance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Euildint Blog Standard Area -->
<!--==================================================-->

@endsection