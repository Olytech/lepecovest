@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">{{$member->name}}</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to EcoVest Dashboard</li> --}}
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        
        <!-- end row -->
        <div class="card col-md-10 mx-auto">
            <div class="card-body">
                @if(Session::has('admin_verify_msg'))
                <p class="alert alert-info">{{ Session::get('admin_verify_msg') }}</p>
                @endif

                <div class="row">
                    <div class="col-md-4">

                        <div class="c text-center pt-5">
                            <img class="rounded-circle shadow" style="object-fit: cover; width:150px; height:150px;" src="{{config('app.url')}}avatars/{{$member->users->avatar}}" alt="">
                        </div>

                    

                    </div>
                    <div class="col-md-8">
                        <table class="table table-striped">

                            <tr >
                                <td class="text-danger">Account Name: </td>
                                <td>{{$member->users->name}}</td>
                            </tr>

                            <tr >
                                <td class="text-danger">Account Email: </td>
                                <td>{{$member->users->email}}</td>
                            </tr>

                            

                            <tr>
                              
                                <td class="font-weight-bold">Director Name:</td>
                                <td>{{$member->managing_director_name}}</td>
                            </tr>                            
                                <td class="font-weight-bold">Business Name:</td>
                                <td>{{$member->business_name}}</td>
                            </tr>
                                <td class="font-weight-bold">CAC Number:</td>
                                <td>{{$member->cac_no}}</td>
                            </tr>
                                <td class="font-weight-bold">Business Address</td>
                                <td>{{$member->business_address}}</td>
                            </tr>
                                <td class="font-weight-bold">Business Website:</td>
                                <td>{{$member->business_website}}</td>
                            </tr>
                                <td class="font-weight-bold">Business Email:</td>
                                <td>{{$member->business_email}}</td>
                            </tr>
                                <td class="font-weight-bold">Contact Person:</td>
                                <td>{{$member->contact_person}}</td>

                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="card col-md-10 mx-auto">
            <div class="card-body">
                <div class="col-md-6">
                    <img class="border border-primary border-radius-4" style="width: 204px; height: 230px; object-fit: cover" src="{{config('app.url')}}company_uploads/{{$member->company_profiles[0]->doc_path}}" alt="">
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>


        <div class="card col-md-10 mx-auto mt-3">
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-md-5 mx-auto">'
                        <form action="{{route('admin_verify')}}" method="post">
                            @csrf
                            <div class="">
                                <input type="hidden" name="user_profile_id" value="{{$member->id}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg btn-block shadow">Verify</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5 mx-auto">'
                        <form action="{{route('disapprove_profile')}}" method="post">
                            @csrf
                            <div class="">
                                <input type="hidden" name="user_profile_id" value="{{$member->id}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-lg btn-block shadow">Disapprove</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div> <!-- container-fluid -->
</div>


@endsection