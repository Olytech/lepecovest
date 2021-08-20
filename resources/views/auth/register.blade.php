<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Leptons EcoVest</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Leptons EcoVest" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{config('app.url')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{config('app.url')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{config('app.url')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{config('app.url')}}assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="assets/images/logo-dar.png" height="22" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Become an EcoVesta</h4>
                                <p class="text-muted text-center">Sign Up with Leptons EcoVest.</p>

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-warning">{{$error}}</p>
                                    @endforeach
                                @endif


                              <form method="post"  class="mt-4" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="useremail">Fullname</label>
                                    <input type="text" name="name" class="form-control" id="useremail" placeholder="Enter your fullname">
                                </div>

                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" class="form-control" id="username" placeholder="example@site.com">
                                </div>
    

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="* * * * * *">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="* * * * ">
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <button class="btn btn-primary btn-block w-md waves-effect waves-light" type="submit">Create a Partners Account</button>
                                    </div>
                                </div>

                                <div class="form-group  mb-0 row">
                                    <div class="col-12 ">
                                        <p class="mb-0">By registering you agree to the Leptons EcoVest<a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-3 text-center">
                                <p>Already have an account ? <a href="{{route('login')}}" class="font-weight-medium text-primary"> Login </a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Leptons Multiconcept</p>
                            </div>

                        </div>
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
