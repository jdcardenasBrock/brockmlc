@extends('layouts.website')

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

    

	<!--==================================================-->
	<!-- Start Euildint Blog Standard Area -->
	<!--==================================================-->
	<div class="blog-standard-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="blog-quote-box mb-40">
								<div class="blog-quote-conent">
									

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color:black">{{ __('Username') }}</label>

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
                                            <label for="password" class="col-md-4 col-form-label text-md-end text-black" style="color:black">{{ __('Password') }}</label>

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

                                                    <label class="form-check-label" style="color:black" for="remember">
                                                        {{ __('Recordar Usuario') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0 mt-4">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary" style="background-color:#236040;border-color:#236040;">
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
