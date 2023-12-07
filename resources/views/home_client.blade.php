@extends('layouts.website_auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
            
                <div class="team-details-area">
                    <div class="m-4">
                    <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="team-details-content">
                                    <div class="team-details-title">
                                        <h4>Select Project</h4>
                                    </div>
                                    <div class="team-details-discription">
                                        <select name="select_project" id="select_project" class="form-control">
                                            <option value="">Select</option>
                                            @foreach ($projects as $project )
                                                <option value="{{$project->id}}">{{$project->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-8 col-xl-8">
                                <div class="ba-team-details-author-skill-area pb-20 pb-xl-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="widget-categories-box">
                                                <div class="widget-catagories-title">
                                                    <h4>Phases</h4>
                                                </div>
                                                <!-- widget categories menu -->
                                                <div class="widget-categories-menu">
                                                    <ul>
                                                        <li><a href="service-details.html"> Business Solution <span><i class="bi bi-chevron-right"></i></span></a></li>	
                                                        <li><a href="service-details.html"> Expert Mechanical <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Architecture &amp; Building <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Construction Management <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Apartment Design <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Facade Engineering <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="widget-categories-box">
                                                <div class="widget-catagories-title">
                                                    <h4>Floorplans</h4>
                                                </div>
                                                <!-- widget categories menu -->
                                                <div class="widget-categories-menu">
                                                    <ul>
                                                        <li><a href="service-details.html"> Business Solution <span><i class="bi bi-chevron-right"></i></span></a></li>	
                                                        <li><a href="service-details.html"> Expert Mechanical <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Architecture &amp; Building <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Construction Management <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Apartment Design <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                        <li><a href="service-details.html"> Facade Engineering <span><i class="bi bi-chevron-right"></i></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="team-details-author-img">
                                                <img src="assets/images/team/team-details.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /. team details author skill -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- start progress bar -->
                                <iframe src="https://my.matterport.com/show/?m=F2XBCzcLJye" frameborder="0" style="width: 100%;height:60%"></iframe>
                                <!-- end progress bar -->
                            </div>
                        </div>
                       
                    </div>
                </div>
               
                <div class="separator mb-5"></div>
            </div>
        </div>
    </div>
    
@endsection


