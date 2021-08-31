<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard | {{config('app.name')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('asset/image/logo.webp')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('backend/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{asset('backend/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/charts/chartist/chartist.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/default-dashboard/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    @livewireStyles

</head>
<body>
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <!--  BEGIN NAVBAR  -->
    <header class="desktop-nav header navbar fixed-top">
        <div class="nav-logo mr-sm-5 ml-sm-4">
            <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block mr-sm-5" data-placement="bottom">
                <i class="flaticon-menu-line-3"></i>
            </a>
            <a href="/" class=""> <img src="{{asset('asset/image/logo.webp')}}" style="width: 50px;height:50px" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item d-lg-block d-none">
                <form class="form-inline form-inline search animated-search">
                    <input type="text" class="form-control search-form-control">
                </form>
            </li>
        </ul>

        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item dropdown user-profile-dropdown pl-4 pr-lg-0 pr-2 ml-lg-2 mr-lg-4  align-self-center">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user">
                    <div class="user-profile d-lg-block d-none">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="width:30px;height:30px;object-fit:cover;" class="img-fluid">
                    </div>
                    <i class="flaticon-user-7 d-lg-none d-block"></i>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    @livewire('task-list')
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">

        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">

                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">Tes Interview Siji <a target="_blank" href="https://www.linkedin.com/in/muhammad-athaberyl-ramadhyli-adl-7099531b0/">Muhammad Athaberyl Ramadhyli Adl</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <aside class="profile-sidebar text-center">
        <div class="profile-content profile-content-scroll">
            <div class="usr-profile">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}-profile" style="width:100px;height:100px;object-fit:cover" class="img-fluid">
            </div>
            <p class="user-name mt-4 mb-4">{{auth()->user()->name}}</p>

            <div class="user-links text-left">
                <ul class="list-unstyled">
                    <li><a href="{{route('profile.show')}}"><i class="flaticon-user-11"></i> My Profile</a></li>
                    <li>
                    <center>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary"><i class="flaticon-power-off"></i> Logout</button>
                        </form>
                        </center>
                    </li>
                </ul>

            </div>
        </div>
    </aside>
    <!--  BEGIN PROFILE SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/loader.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('backend/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset('backend/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/plugins/calendar/pignose/moment.latest.min.js')}}"></script>
    <script src="{{asset('backend/plugins/calendar/pignose/pignose.calendar.js')}}"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    @livewireScripts

</body>
</html>
