@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Members</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to EcoVest Dashboard</li> --}}
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">All Records</h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">(#)</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($members as $member)

                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>
                                            <div>
                                                <img class="shadow-lg rounded-circle"  style="object-fit: cover; width: 50px; height: 50px;" src="{{config('app.url')}}avatars/{{$member->avatar}}" alt=""
                                                    class="avatar-xs rounded-circle mr-2"> {{$member->name}}
                                            </div>
                                        </td>
                                        <td>{{Carbon\Carbon::parse($member->created_at)->format('d M, Y')}}</td>
                                   
                                        <td><span class="badge badge-success">pending</span></td>
                                        <td>
                                            <div>
                                                @if($member->user_profiles)
                                                <a href="{{route('admin.member', $member->user_code)}}" class="btn btn-primary btn-sm">view profile</a>
                                                @else 

                                                <a href="" class="btn btn-danger btn-sm disabled" >Unverified</a>

                                                @endif

                        
                                            </div>
                                        </td>
                                    </tr>
                                        
                                    @empty
                                        
                                    @endforelse
                         
                                   
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