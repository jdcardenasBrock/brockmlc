@extends('layouts.website')

@section('content')

<style>
    #top-portal{
        background: url(assets/images/mountains.png), #272a2c;
        background-position: center 0%; 
        background-size: 85%;
        background-repeat: no-repeat;
        height: auto;
        padding-top: 330px;
    }   
    /* input{
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: blue !important;
        background-color: rgba(255, 255, 255, 0.5) !important;
    } 
    input:focus {
        border-color: green;
        outline: 1px dotted #000
    }    */
</style>

<!-- <div class="breatcome-area" id="top-portal">
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
</div> -->

    

	<!--==================================================-->
	<!-- Start Euildint Blog Standard Area -->
	<!--==================================================-->
	<div class="blog-standard-area" id="top-portal">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row pb-5">
						<div class="col-lg-4 offset-lg-4 pb-4" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 15px;">
							<!-- <div class="blog-quote-box mb-40">
								<div class="blog-quote-conent"> -->
									<div class="title text-center mb-5 mt-5">
                                        <h2 style="color: white">BMLC portal</h2>
                                    </div>                                    
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end" style="color:black">{{ __('Username') }}</label> -->

                                            <div class="col-md-10 offset-lg-1">
                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Username') }}" required autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end text-black" style="color:black">{{ __('Password') }}</label> -->

                                            <div class="col-md-10 offset-lg-1">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" style="color:black" for="remember">
                                                        {{ __('Remember User') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0 mt-4">
                                            <div class="col-md-5 offset-md-4">
                                                <button type="submit" class="btn btn-primary" style="background-color:#236040;border-color:#236040;">
                                                    {{ __('Log In') }}
                                                </button>

                                                <!-- @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Recuperar Contraseña') }}
                                                    </a>
                                                @endif -->
                                            </div>
                                        </div>
                                    </form>

<!--                                 
								</div>
							</div> -->
						</div>												
					</div>
				</div>				
			</div>
		</div>
	</div>




@endsection
