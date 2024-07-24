@extends('layouts.website')
@section('content') 
<style>
    #top-sitework{
        background: url(assets/images/mountains.png), #272a2c;
        background-position: 95% 80%; 
        background-size: 50%;
        background-repeat: no-repeat;
    } 
    p.discription  {
        font-size: 20px;
        line-height: 30px;
        color: white !important;
    }
    .slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	} 
    span.no-span {
        display: table;
        white-space: nowrap;
        &:before, &:after {
        border-top: 3px solid white;
        content: '';
        display: table-cell;
        position: relative;
        top: 1em;
        width: 45%;
        }
        &:before { right: 1.5%; }
        &:after { left: 1.5%; }
    }

    .breatcome-title h1{
        text-align: center;
    }
    
     /* estilos para tablets en adelante */
     @media (min-width: 768px) {
        .breatcome-title h1{
            text-align: left;
        }
        #top-sitework{
            background-position: 100% 0%;
            background-size: 35%;
        }
     }

</style>
<!-- <div class="container" style=""> -->
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-sitework">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title" id="sitework">                       
                        <h1>Our Services</h2>
                    </div>
                    <!-- <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Sitework</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Euildint hesitory Area -->
<!--==================================================-->
<div class="heistory-area animate__slideInUp">
    <div class="" style="">

        <div class="row" id="container_sitework" style="background: url('assets/images/sitework/Sitework_Photo_Option_7.png'); background-position: center; background-size: cover; transition: background 2s;">            
            <div class="col-lg-6 offset-lg-6 col-md-12 text-center" style="height: auto; display: flex; align-items: center; background-color: rgba(0, 0, 0, 0.6);">
                <div class="history-content wow animate__slideInUp p-4">
                    <div class="title mb-5">
                        <h2 style="color: white">Sitework</h2>
                    </div>
                    <p class="discription p-2" style="text-align: justify;">
                    At Brock Mountain, we understand the importance of ensuring your groundwork is in
                    optimal condition to support subsequent construction phases. We maintain a proactive approach allowing us to anticipate potential obstacles and implement strategic solutions to keep timelines intact and costs controlled. Our equipment accessibility coupled with our proven expertise is another reason why we are trusted nationwide.
                    </p>
                    <div class="widget-categories-box" style="background-color: rgba(0, 0, 0, 0);">
                        <!-- categories title -->
                        <!-- <div class="widget-catagories-title">
                            <h4> Popular Tags </h4>
                        </div> -->
                        <div class="widget-tags">
                        <a>Turnkey Site Solutions</a>
                        <a>Stormwater</a>
                        <a>Forestry Mulching</a>
                        <a>Retaining Walls</a>
                        <a>Land Clearing</a>
                        <a>Concrete</a>
                        <a>Disaster Clean-Up</a>
                        <a>Demolition</a>
                        <a>Utilities</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>               

    </div>
</div>
<div class="text-center pt-5" style="background-color: #272a2c">
    <div class="eulding-btn about">
        <a href="{{route('contact')}}" style="background-color: #272a2c; font-size: 24px">
            <span class="no-span" style="color: white">Questions?</span> <span style="color: #266041">Contact Us</span>
            <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
        </a>
    </div>
</div>
<!-- </div> -->
<script>
    //location.hash = "container_building"

    var section =  window.location.hash;    

    // function scrollToElement(pageElement, position) {    
    //     var positionX = 0,         
    //         positionY = position;    

    //     while(pageElement != null){        
    //         positionX += pageElement.offsetLeft;        
    //         positionY += pageElement.offsetTop;                   
    //         pageElement = pageElement.offsetParent;        
    //         window.scrollTo(positionX, positionY);    
    //     }        

    // }

    // if(section == "#building"){
    //     console.log("bui")
    //     var pageElement = document.getElementById("container_building");
    //     scrollToElement(pageElement, '0');
    // } 

    
    let target = document.getElementById("container_"+section.substring(1));
    var margin = target.offsetTop + 200
    window.scrollTo(target.offsetLeft, margin);    
    
       
</script>
@endsection