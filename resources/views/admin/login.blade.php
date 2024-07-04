<!DOCTYPE html>
<html lang="en">
<title>Login | HUMTUM</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Humtum Admin Login" />
<meta name="keywords" content="Humtum, Admin" />
<meta name="author" content="colorlib" />

<link rel="icon" href="{{ asset('images/crql/favicon.ico') }}" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">
</head>

<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" action="{{ route('admin.verify.login') }}" method="POST">
                        <div class="text-center">
                            <img src="{{ asset('images/logo/Logo.png') }}" alt="logo.png" width="120">
                        </div>
                        <div class="auth-box card">
                            @if ($errorMsg = session()->get('error'))
                                <div class="alert alert-danger border-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icofont icofont-close-line-circled"></i>
                                    </button>
                                    <strong>Warning!</strong> <code> {{ $errorMsg }}</code>
                                </div>
                            @elseif($success = session()->get('success'))
                                <div class="alert alert-success border-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icofont icofont-close-line-circled"></i>
                                    </button>
                                    <strong>Success!</strong> <span> {{ $success }}</span>
                                </div>
                            @endif
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="javascript:void(0)" class="text-right f-w-600">
                                                Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        </div>

    </section>


    <script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/common-pages.js') }}"></script>

</body>

</html>
