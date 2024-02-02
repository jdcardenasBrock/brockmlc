@extends('layouts.website')
@section('content')
<style>
    #top-our_mission {
        background: url(assets/images/resource/testimonials.jpeg);
        background-position: center center;
        background-size: cover;
    }

    .slider-description,
    .slider-main-title,
    .section-main-title.contact,
    .contact-discription,
    .faq-title h4,
    .call-do-title,
    .counter-content h5,
    .counter-numbar h4,
    .counter-numbar span,
    .breatcome-title h1 {
        text-shadow: 1px 4px 6px black;
    }

    .vbox-inline {
        width: 960px;
        height: 720px;
        margin-top: -200px !important;
        overflow: hidden;
    }

    .vbox-inline video {
        margin-top: 15%;
        margin-left: 10%;
        width: 80% !important;
        height: 80%;
    }

    .eulding-btn {
        display: block;
    }

    .eulding-btn a {
        width: 415px;
        text-align: center;
    }

    .section-main-title {
        font-size: 38px;
    }

    @media (max-width: 991.98px) {
        .breatcome-content {
            top: 82px;
            text-align: center;
        }

        .section-main-title {
            font-size: 21px;
        }

        .section-title {
            text-align: center;
        }
    }
</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-our_mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Testimonials</h1>
                    </div>
                    <div class="bratcome-text">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Testimonials</li>
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
<div class="heistory-area animate__slideInUp" style="margin-bottom: 120px;">
    <div class="container">
        <div class="row history-bg">
            <div class="col-lg-12" style="margin-top: 20px;">
                <!-- start section title -->
                <div class="section-title">
                    <div class="section-shape">
                        <img src="assets/images/resource/section-shape.png" alt="">
                    </div>
                    <div class="section-sub-title">
                        <h4>TESTIMONIALS</h4>
                    </div>
                    <div class="section-main-title">
                        <h2>Our Happy Clients</h2>
                        <h2>Says About Us</h2>
                    </div>
                </div>
                <!-- End section title -->
                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>“Said You were in a league of our own and amazing! Good work team!”</p>
                        <h4>Satisfied Client</h4>
                    </div>
                </div>
                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>"My wife and I haven been staying at a Bluegreen resort in Daytona Beach for over a week while your crew is doing work on their beachfront that was heavily damaged during the last hurricane. It has been a pleasure to watch a crew that is organized, moving along nicely with difficult sheet piling work, keeps everything neat and organized, has a crew along the perimeter to keep sightseer’s out of the way, everyone is wearing the same uniform and acts very professional, and they keep the sight looking good all day and then when they leave at night. WOW!!!! I am an engineer and have been around construction most of my life and your crew is the best I have seen!!!"</p>
                        <h4>Engineer</h4>
                    </div>
                </div>

                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>I live in Daytona Beach Shores, Florida and was greatly impacted by the hurricane Ian / Nicole as we just cashed in everything and moved into our dream shack (literally) on the beach in Florida in 2020 from Dallas, Texas. Devastated by the destruction and limited resources (my husband is a middle school teacher for troubled children), we did not know where to turn or who to contact especially embarrassed that we may have not the resources like many others. For the last 6 months we worked on the property in a daze as we really didn't know what to do or who to trust. I listened to the message you sent to our neighbors about you were here to help us but that is what everyone had been saying as they submitted ridiculous estimates and conditions to us. Nevertheless, I ask a trusted neighbor (Len Alamo) who to call and I was told to call Nick Girard at Brock. He said, I promise, call Nick, you will be in good hands. Although I was afraid, and knew I may feel intimidated, I still called. He called me right back. Came right over and looked at the job. He told me what to do. Once that was done, he provided us a reasonable estimate. Within 2 weeks we were done. UNBELIEVEABLE! I feel like y'all just dropped from heaven into our neighborhood and saved us. I just want to say thank you for leading with amazing core values that obviously trickles down to the talent you hire. To meet Nick has been a tremendous blessing and a source of comfort for us especially in one of the most scariest points of our lives . Although obviously Nick is super smart and knows what he is doing. He never talked over our heads and intimidated us with all the fancy engineering talk. He made sure we were clear in terms of what was needed and what needed to be done. I didn't feel overwhelmed or uninformed about the whole situation. FYI, everyone (ie. neighbors, other contractors, city/county/state officials, everyone) in the neighborhood knows Nick and his team. Then we met more of the crew at the neighborhood party last week. All the workers had the same giving, kind and humble spirit as Nick. What an amazing, blessed and anointed organization you have created. I am so thankful to know you all and to have worked with you all. It has blessed my soul so much and makes me want to be a better and more selfless person too. Thank you for blessing me, my family and our community. Thank you for standing behind every word you said in that video. May the Lord continue to bless you, your staff and your company. Thank you for doing so much good in this world. We will forever be grateful for Brock Mountain for saving our home and hopefully our generations long past when we are gone can have a safe place to enjoy because of Brock Mountain and their amazing staff! I have never seen an angel before but I think they may resemble the type of characteristics I saw in your staff.Kindest and Warmest Regards,
                            Latrice Bryant-Robinson Daytona Beach Shores
                        </p>
                        <h4>Satisfied Client</h4>
                    </div>
                </div>

                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>"I simply can't understand how contractors that have been doing this for 30 years don't look as good as your first one...you have proven your abilities and I will be sending you lots of work!".</p>
                        <h4>Property Manager</h4>
                    </div>
                </div>

                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>“Shout out to Brock Mountain Land Company, LLC & Eric Burns for the great expansion & renovation job they did for Dwight & JR at Small Business Alternatives - Candler’s local accounting firm. Brock does it all commercial, residential, land etc. Love to see locals supporting locals so give them a call at (888) 774-6498 if you need any work done. Let’s keep local money local. Thanks again Eric”</p>
                        <h4>Engineer</h4>
                    </div>
                </div>

                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>"Just did another close up tour of the beach. Seeing a lot of your work. WELL DONE!!!!!!!! I'm impressed beyond words!!!! Thank you for what you do! I'm telling everyone I know"</p>
                        <h4>Satisfied Client</h4>
                    </div>
                </div>

                <div class="blog-quote-box mb-40">
                    <div class="blog-quote-conent">
                        <i class="fas fa-quote-right"></i>
                        <p>“Your team has done the unthinkable. “Your efforts are extremely appreciated and more work is coming on other projects””</p>
                        <h4>Property Manager</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint History Area -->
<!--==================================================-->
@endsection