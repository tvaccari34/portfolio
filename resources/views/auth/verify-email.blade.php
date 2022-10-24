<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Recover Password | Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('backend/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Resend Verification Email</b></h4>

                        <div class="p-3">
                            <h4 class="text-muted text-left font-size-12">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</h4>
                        </div>

                        <div class="p-3" style="display: flex;flex: 1;justify-content: space-between;">

                            <div>
                                <form class="form-horizontal" method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div class="form-group pb-2 text-center row mt-3">
                                        <div class="col-12">
                                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Resend Verification Email</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <form class="form-horizontal" method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <div class="form-group pb-2 text-center row mt-3">
                                        <div class="col-12">
                                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log Out</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->


        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{ asset('backend/assets/js/app.js')}}"></script>

    </body>
</html>
