@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <form action="{{route('become_partner')}}" method="post" class="text-center mt-3">
            @csrf
            <div class="form-group">
                <button class="btn btn-warning">Switch to Partner</button>
            </div>
        </form>

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Hi, {{Auth::user()->name}}</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Welcome to House Deals Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            
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

       
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection