@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <form action="{{route('become_buyer')}}" method="post" class="text-center mt-3">
            @csrf
            <div class="form-group">
                <button class="btn btn-info">Switch to Buyer</button>
            </div>
        </form>

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-title-box text-center">
                    <h3 class="">Hello, {{Auth::user()->name}}</h3>
                    <h6 class="text-center">Welcome to House Deals Dashboard</h6>
                
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="d-none row">
            
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Listings</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
                                    class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                            
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/03.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                            <h4 class="font-weight-medium font-size-24">0<i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                           
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/04.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Contracts</h5>
                            <h4 class="font-weight-medium font-size-24">0<i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                           
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div style="min-height: 330px;" class="r  pt-2">
            <div class="p-3"></div>
            <div style="min-height: 130px;" class="card col-md-3 mx-auto  shadow mt-3">
                <div class="card-body text-center ">
                    <h6>Company profile not verified</h6>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_alyseq4q.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
                <a href="{{route('partner.profile')}}" class="btn btn-primary btn-block mt-3 shadow">Update Profile</a>

                </div>
            </div>
        </div>

       
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection