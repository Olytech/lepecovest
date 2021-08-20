@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">



        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Hi, {{Auth::user()->name}}</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">You have elevated priviledges</li>
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
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Members</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
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

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Monthly Earning</h4>
                        <div class="row">
                            <div class="col-lg-7">
                                <div>
                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">This month</p>
                                            <h3>$34,252</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut"
                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                data-width="72" data-height="72">4/5</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">Last month</p>
                                            <h3>$36,253</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut"
                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                data-width="72" data-height="72">3/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end card -->
            </div>

            
        </div>
        <!-- end row -->

        <div class="row">
            
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Activity</h4>
                        <ol class="activity-feed">
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 22</span>
                                    <span class="activity-text">Responded to need “Volunteer
                                        Activities”</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 20</span>
                                    <span class="activity-text">At vero eos et accusamus et iusto odio
                                        dignissimos ducimus qui deleniti atque...<a href="#"
                                            class="text-success">Read more</a></span>
                                </div>
                            </li>
                           
                        </ol>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Client Reviews</h4>
                                <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                    language would be desirable one could refuse to pay expensive
                                    translators it would be necessary. "</p>
                                <div class="float-right mt-2">
                                    <a href="#" class="text-primary">
                                        <i class="mdi mdi-arrow-right h5"></i>
                                    </a>
                                </div>
                                <h6 class="mb-0"><img src="assets/images/users/user-3.jpg" alt=""
                                        class="avatar-sm rounded-circle mr-2"> James Athey</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Trasaction</h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">(#) Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#14256</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/user-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle mr-2"> Philip Smead
                                            </div>
                                        </td>
                                        <td>15/1/2018</td>
                                        <td>$94</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection