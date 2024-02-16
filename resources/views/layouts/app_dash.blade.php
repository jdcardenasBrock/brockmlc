<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ProHound') }}</title>
	<meta name="description" content="App">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/fav-icon/icon.ico')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css')}}" />

    <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{ asset('font/simple-line-icons/css/simple-line-icons.css')}}" />

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-stars.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}" />
    
</head>


<body id="app-container" class="menu-default show-spinner" >
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center ">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            
        </div>


        <a class="navbar-logo" href="{{route('home')}}">
            <img src="{{asset('img/profiles/prohound_app_logo.jpg')}}" style="height: 64px;position: absolute; left: 164px; top:18px" alt="ProHound">
        </a>

        <div class="navbar-right">

        <a href="{{route('home')}}">
            <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty btn-brock" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Go Back to the Main Portal Menu
                        <i class="iconsminds-back"></i>
                    </button>
            </div>

            </a>
            <div class="header-icons d-inline-block align-middle">
                

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span>
                        <img alt="Profile Picture" src="{{asset('img/profiles/l-1.jpg')}}" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Log Out') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="iconsminds-tablet-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    @can('view_projects')
                    <li>
                        <a href="{{route('project.index')}}" style="text-align: center">
                            <i class="simple-icon-layers"></i> Projects
                        </a>
                    </li>
                    @endcan
                    @can('create_user')
                    <li>
                        <a href="#permissions">
                            <i class="simple-icon-wrench"></i> Permissions <br> & Users
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a href="{{route('home')}}">
                            <i class="iconsminds-back"></i> Go Back to<br> the Main<br> Portal Menu
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="permissions">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Permissions and User List</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                @can('view_permissions')
                                <li>
                                    <a href="{{route('permissions.index')}}">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Permissions</span>
                                    </a>
                                </li>
                                @endcan
                                @can('view_role')
                                <li>
                                    <a href="{{route('roles.index')}}">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Roles</span>
                                    </a>
                                </li>
                                @endcan
                                @can('create_user')
                                <li>
                                    <a href="{{route('users.index')}}">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Users</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>

               
                </ul>

            </div>
        </div>
        
    </div>

    <main>

        @yield('content')

    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">PRO HOUND</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="https://newbrockmlc.mcardi.com/" class="btn-link" target="_blank">Brock MLC</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('js/vendor/moment.min.js')}}"></script>
    <script src="{{asset('js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/vendor/progressbar.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('js/vendor/nouislider.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/vendor/Sortable.js')}}"></script>
    <script src="{{asset('js/vendor/mousetrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/glide.min.js')}}"></script>
    <script src="{{asset('js/dore.script.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    @stack('scripts')
</body>
</html>
