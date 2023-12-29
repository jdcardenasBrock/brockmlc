@extends('layouts.website_auth')

@section('content')
<style>
    #top-portal{
        background: url(img/banner/bannerPortal.jpg);
        background-position: center center; 
        background-size: cover;
    }    
    @media (min-width: 992px) {
        #top-portal{            
            background-position: center center; 
            background-size: cover;
            height: 430px;
        }  
      .breatcome-content{
        top: 82px;
        text-align: center;
      }     
    }

    @media (max-width: 991.98px) {
        #top-portal{            
            background-position: 80% 130%;
        background-size: cover;
            background-repeat: no-repeat;
        }  
      .breatcome-content{
        top: 82px;
        text-align: center;
      }     

    }

    @media (min-width: 630px) and (max-width: 991px){
        
        #top-portal{            
            background-position: 50% 150%;
            margin-top: 45px;
            background-repeat: no-repeat;
        } 
    
    }
    @media (max-width: 630px){
        
        #top-portal{            
            background-position: 50% 100%;
            background-size: cover;    
            margin-top: 45px;
        } 
    
    }

</style>

<div class="breatcome-area" id="top-portal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">

                    </div>
                    <div class="bratcome-text"> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area wow animate__slideInUp" style="visibility: visible;">
		<div class="container">
			<div class="row">
				
			</div>

			<div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-30">
                    <!-- start blog single box -->

                    <a href="{{ route('proHound') }}" style="text-decoration: none; display: block; color: inherit;">
                        <div class="blog-single-box style-two">
                            <div class="blog-thumb">
                                <img src="{{asset('img/cards/logo.png')}}" alt="" style="width:100%">
                            </div>
                            <div class="blog-content style-two">
                                <div class="blog-title style-two mt-3 mb-3">
                                   <h3 style="text-decoration:underline;color:#236040 !important"> ProHound</h3>
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-btn style-two">
                                        Enter to ProHound
                                    </div>
                                    <div class="blog-icon">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End blog single box -->
                </div>
                
                    <div class="col-lg-4 col-md-6 mb-30">
                        <!-- start blog single box -->
                        <a href="{{ route('home') }}" style="text-decoration: none; display: block; color: inherit;">
                            <div class="blog-single-box style-two">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/cards/western.png')}}" alt="" style="width:100%">
                                </div>
                                <div class="blog-content style-two">
                                    
                                    <div class="blog-title style-two mt-3 mb-3">
                                    <h3 style="text-decoration:underline;color:#236040 !important"> Western Zone Clients</h3>
                                    </div>
                                    <div class="blog-bottom">
                                        <div class="blog-btn style-two">
                                            Enter to Western Zone Clients
                                        </div>
                                        <div class="blog-icon">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End blog single box -->
                    </div>
                
                    <div class="col-lg-4 col-md-6 mb-30">
                        <!-- start blog single box -->
                        <a  href="{{ route('home') }}" style="text-decoration: none; display: block; color: inherit;">
                            <div class="blog-single-box style-two">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/cards/eastern.png')}}" alt="" style="width:100%">
                                </div>
                                <div class="blog-content style-two">
                                    
                                    <div class="blog-title style-two mt-3 mb-3">
                                    <h3 style="text-decoration:underline;color:#236040 !important">Eastern Zone Clients</h3>
                                    </div>
                                    <div class="blog-bottom">
                                        <div class="blog-btn style-two">
                                            Enter to Eastern Zone Clients
                                        </div>
                                        <div class="blog-icon">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End blog single box -->
                    </div>
            </div>
    </div>
</div>
    
@endsection
@push('scripts')
<script>
         
</script>
@endpush


