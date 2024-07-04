<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Admin Cart</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Wedding Admin" />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="{{ asset('images/crql/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    @yield('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">

    <link rel="stylesheet" href="{{ asset('files/bower_components/chartist/css/chartist.css') }}" type="text/css"
        media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/widget.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" style="background: #F2F7FB">
                        <a href="{{ route('admin.dashboard') }}">
                            <img class="img-fluid" src="{{ asset('images/logo/Logo.png') }}" style="margin-left: 60px;height: 54px;
    width: 70px;"
                                alt="Theme-Logo">
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">

                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <a href="javascript:void(0)">Profile
                                        </a>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{ route('admin.logout') }}">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.main.sidebar')

                    @yield('content')

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>





    <script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}">
    </script>

    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/curvedLines.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>

    <script src="{{ asset('files/assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/light.js') }}"></script>

    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')}}">
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/google-maps/gmaps.js') }}"></script>

    <script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/dashboard/crm-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/script.min.js') }}"></script>

    <script src="{{ asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <script src="{{ asset('files/assets/pages/data-table/js/data-table-custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(".select2").select2();
    </script>

    @yield('script')

</body>

</html>
