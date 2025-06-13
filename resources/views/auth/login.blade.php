<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Lala Lajpat Rai Memorial College Of Education - Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description"
            content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords"
            content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="colorlib" />

        <link rel="icon" href="{{url('admin-assets/assets/images/favicon.ico')}}" type="image/x-icon">

        <link href="{{url('admin-assets/fonts.googleapis.com/css0f7c.css?family=Open+Sans:300,400,600,700,800')}}"
            rel="stylesheet">
        <link href="{{url('admin-assets/fonts.googleapis.com/css1180.css?family=Quicksand:500,700')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css"
            href="{{url('admin-assets/bower_components/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{url('admin-assets/assets/pages/waves/css/waves.min.css" type="text/css')}}"
            media="all">
        <link rel="stylesheet" type="text/css" href="{{url('admin-assets/assets/icon/feather/css/feather.css')}}">

        <link rel="stylesheet" type="text/css"
            href="{{url('admin-assets/assets/icon/themify-icons/themify-icons.css')}}">

        <link rel="stylesheet" type="text/css" href="{{url('admin-assets/assets/icon/icofont/css/icofont.css')}}">

        <link rel="stylesheet" type="text/css"
            href="{{url('admin-assets/assets/icon/font-awesome/css/font-awesome.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{url('admin-assets/assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('admin-assets/assets/css/pages.css')}}">
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

        <section class="login-block"
            style="background-image: url('{{ url('admin-assets/assets/images/2148721266.jpg') }}')">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">

                        <form class="md-float-material form-material" action="{{ route('adminLogin') }}" method="POST"
                            autocomplete="off">
                            @csrf
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-0">
                                        <div class="col-md-12">
                                            <div class="text-center mb-0">
                                                <img src="{{url('admin-assets/assets/images/logo.png')}}"
                                                    alt="logo.png">
                                            </div>
                                            <h3 class="text-center txt-primary ">Sign In</h3>
                                        </div>
                                    </div>
                                    <p class="text-muted text-center p-b-5">Enter your username & password to login</p>
                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-danger py-2" role="alert">
                                        {{ $message }}
                                    </div>
                                    @endif
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" required>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="form-bar"></span>
                                        <label class="form-label float-label">Username</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="form-bar"></span>
                                        <label class="form-label float-label">Password</label>
                                    </div>
                                    <div class="row m-t-25 text-start">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="form-label">
                                                    <input type="checkbox" value>
                                                    <span class="cr"><i
                                                            class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-end float-end">
                                                <a href="{{url('admin-assetset-password.html')}}"
                                                    class="text-end f-w-600"> Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <div class="d-grid">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary btn-md waves-effect text-center m-b-20">LOGIN</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <p class="text-inverse text-start">Don't have an account?<a
                                            href="{{url('admin-assetsn-up-social.html')}}"> <b>Register here
                                    </b></a>for free!</p> --}}
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

            </div>

        </section>




        <script type="text/javascript" src="{{url('admin-assets/bower_components/jquery/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('admin-assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}">
        </script>
        <script type="text/javascript" src="{{url('admin-assets/bower_components/popper.js/js/popper.min.js')}}">
        </script>
        <script type="text/javascript" src="{{url('admin-assets/bower_components/bootstrap/js/bootstrap.min.js')}}">
        </script>

        <script src="{{url('admin-assets/assets/pages/waves/js/waves.min.js')}}">
        </script>

        <script type="text/javascript"
            src="{{url('admin-assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}">
        </script>

        <script type="text/javascript" src="{{url('admin-assets/bower_components/modernizr/js/modernizr.js')}}">
        </script>
        <script type="text/javascript" src="{{url('admin-assets/bower_components/modernizr/js/css-scrollbars.js')}}">
        </script>
        <script type="text/javascript" src="{{url('admin-assets/assets/js/common-pages.js')}}">
        </script>
    </body>


</html>