<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Permission Restricted</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{config('app.url')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{config('app.url')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{config('app.url')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                    <div class="container">
                        <div class="card mo-mt-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 ml-auto">
                                        <div class="ex-page-content">
                                            <h1 class="text-dark mt-4">Permission Restriction</h1>
                                            {{-- <h4 class="mb-4">Sorry, permission restricted</h4> --}}
                                            <p class="mb-5">You are not allowed to view this page</p>
                                            <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{route('choose_role')}}"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                                        </div>
                            
                                    </div>
                                    <div class="col-lg-5 mx-auto">
                                        <img src="{{config('app.url')}}assets/images/error.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end container -->
            </div>

        </div>

        

        <!-- JAVASCRIPT -->
        <script src="{{config('app.url')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
