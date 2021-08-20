<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Lock Screen</title>
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

        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="d-none bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20">Locked</h5>
                                    <p class="text-white-50">Hello, your login session has expired.</p>
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/logo-sm.pn" height="24" alt="logo">
                                    </a>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="form-horizontal mt-4" action="index.html">

                                        <div class="pt-3 text-center">
                                            <img src="assets/images/users/user-.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                            <h6 class="font-size-20 mt-3">Hello, your login session has expired.</h6>
                                        </div>

                                 

                                    

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-12 text-right">
                                                <a href="{{route('login')}}" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Back to Login</a>
                                            </div>
                                        </div>
    
                                    </form>
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="mt-5 text-center">
                            <p>Not you ? return <a href="{{route('login')}}" class="font-weight-medium text-primary"> Sign In </a> </p>
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Developed by  by vicSystems</p>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{config('app.url')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/node-waves/waves.min.js"></script>

        <script src="{{config('app.url')}}assets/js/app.js"></script>

    </body>
</html>
