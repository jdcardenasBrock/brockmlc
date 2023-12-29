@extends('layouts.website_auth')

@section('content')
<div class="blog-area wow animate__slideInUp" style="visibility: visible;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- start section title -->
					<div class="section-title text-center">
						<div class="section-shape">
							<img src="{{asset('assets/images/logo_negativo.png')}}" style="width:42px;height:33px" alt="">
						</div>
						<div class="section-sub-title">
							<h4>BMLC Portal</h4>
						</div>
						<div class="section-main-title blog">
							<h2>Select an Option</h2>
						</div>
					</div>
					<!-- End section title -->
				</div>
			</div>

			<div class="row">
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- start blog single box -->
                    <div class="blog-single-box style-two">
                        <div class="blog-thumb">
                            <img src="{{asset('img/cards/logo.png')}}" alt="">
                        </div>
                        <div class="blog-content style-two">
                            
                            <div class="blog-title style-two mt-3 mb-3">
                                <h3><a href="{{route('proHound')}}" style="color:#236040 !important;">ProHound</a></h3>
                            </div>
                            <div class="blog-bottom">
                                <div class="blog-btn style-two">
                                    <a href="{{route('proHound')}}">Enter to ProHound</a>
                                </div>
                                <div class="blog-icon">
                                    <a href="{{route('proHound')}}"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End blog single box -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- start blog single box -->
                    <div class="blog-single-box style-two">
                        <div class="blog-thumb">
                            <img src="{{asset('img/cards/eastern.png')}}" alt="">
                        </div>
                        <div class="blog-content style-two">
                            
                            <div class="blog-title style-two mt-3 mb-3">
                                <h3><a href="{{route('home')}}" style="color:#236040 !important;">Eastern Zone Clients</a></h3>
                            </div>
                            <div class="blog-bottom">
                                <div class="blog-btn style-two">
                                    <a href="{{route('home')}}">Enter to Eastern Zone Clients</a>
                                </div>
                                <div class="blog-icon">
                                    <a href="{{route('home')}}"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End blog single box -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- start blog single box -->
                    <div class="blog-single-box style-two">
                        <div class="blog-thumb">
                            <img src="{{asset('img/cards/western.png')}}" alt="">
                        </div>
                        <div class="blog-content style-two">
                            
                            <div class="blog-title style-two mt-3 mb-3">
                                <h3><a href="{{route('home')}}" style="color:#236040 !important;">Western Zone Clients</a></h3>
                            </div>
                            <div class="blog-bottom">
                                <div class="blog-btn style-two">
                                    <a href="{{route('home')}}">Enter to Western Zone Clients</a>
                                </div>
                                <div class="blog-icon">
                                    <a href="{{route('home')}}"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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


