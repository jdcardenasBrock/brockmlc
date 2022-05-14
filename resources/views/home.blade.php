@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>
               
                <div class="separator mb-5"></div>
            </div>
        </div>


   
            <div class="row">
                <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers glide--ltr glide--slider glide--swipeable">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides" style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 706.667px; transform: translate3d(0px, 0px, 0px);">
                                
                                    <li class="glide__slide" style="width: 169.667px; margin-left: 3.5px; margin-right: 3.5px;">
                                        <a href="{{url('references')}}" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-arrow-refresh"></i>
                                                <p class="card-text mb-0">Modulo Maestro de Referencias</p>
                                                <span class="badge badge-pill badge-outline-primary mb-1">Ir</span>
                                            </div>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </div>
    
@endsection


