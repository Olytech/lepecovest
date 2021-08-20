@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Notifications</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to Leptons EcoVest</li> --}}
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="p-3"></div>

        <div class="row">
            <div class="container-fluid">
                <div class="list-group">

                  @forelse ($notifications as $notification)

                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{$notification->title}}</h5>
                      <small class="text-muted"></small>
                    </div>
                    <p class="mb-1">{{$notification->body}}</p>
                    <small class="text-muted">{{$notification->created_at->diffForHuman()}}</small>
                  </a>

                  @empty 


                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"></h5>
                      <small class="text-muted"></small>
                    </div>
                    <p class="mb-1 text-center"><h4>No messages yet..</h4></p>
                    <small class="text-muted"></small>
                  </a>


                      
                  @endforelse

                  
                   
                    
                  </div>
            </div>
        </div>

        
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection