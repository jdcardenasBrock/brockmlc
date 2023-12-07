@extends('layouts.website')

@section('content')


<style>
	#top-our-clients{
        background: url("{{asset('img/banner/banner1.jpg')}}");
    }
	.slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	}
</style>
    <!--==================================================-->
    <!-- Start Euildint Breatcome Area -->
    <!--==================================================-->
    <div class="breatcome-area" id="top-our-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breatcome-content">
                        <div class="breatcome-title">
                            
                        </div>
                        <div class="bratcome-text">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Pro HOUND</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

	<!--==================================================-->
	<!-- Start Euildint Blog Standard Area -->
	<!--==================================================-->
	<div class="blog-standard-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row">
						<div class="col-lg-12">
							<!-- start section title -->
							<div class="section-title text-center">
								<div class="section-shape">
									<img src="assets/images/resource/section-shape.png" alt="">
								</div>
								<div class="section-sub-title">
									<h4>Welcome</h4>
								</div>
								<div class="section-main-title">
									<h2>Please Log in </h2>
									<h2>to see your project(s)</h2>
								</div>
							</div>
							<!-- End section title -->
						</div>
					</div>
					<!-- End section title -->
					<div class="row">
						<div class="col-lg-12">
							<div class="blog-quote-box mb-40">
								<div class="blog-quote-conent">
									

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end text-black">{{ __('Username') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end text-black">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordar Usuario') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0 mt-4">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Iniciar Sesion') }}
                                                </button>

                                                <!-- @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Recuperar Contraseña') }}
                                                    </a>
                                                @endif -->
                                            </div>
                                        </div>
                                    </form>

                                
								</div>
							</div>
						</div>												
					</div>
				</div>				
			</div>
		</div>
	</div>




@endsection
