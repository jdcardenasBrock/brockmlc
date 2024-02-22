@extends('layouts.app_dash')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>
               
                <div class="separator mb-5"></div>


                @if (auth()->user()->hasAnyPermission([
                    'view_projects','create_projects','edit_projects','delete_projects']))
                <div class="row">
                    <div class="col-lg-3">
                    <a href="{{route('project.index')}}" style="text-align: center">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="simple-icon-layers mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                   @endif
                   @if (auth()->user()->hasAnyPermission(['view_permissions','create_permissions','edit_permissions','delete_permissions']))
                    <div class="col-lg-3">
                        <a href="{{route('permissions.index')}}" style="text-align: center">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-security-check mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">Permissions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif

                    @if (auth()->user()->hasAnyPermission(['view_role','create_role','edit_role','delete_role']))
                    <div class="col-lg-3">
                        <a href="{{route('roles.index')}}" style="text-align: center">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="simple-icon-link mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">Roles</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if (auth()->user()->hasAnyPermission(['create_user','edit_user','delete_user']))
                    <div class="col-lg-3">
                        <a href="{{route('users.index')}}" style="text-align: center">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-business-mens mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
@endsection


