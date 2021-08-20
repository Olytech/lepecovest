@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Profile</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Please update the fields</li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

 
        <!-- end row -->

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">


                        @if(Session::has('update_profile_msg'))
                        <p class="alert alert-info">{{ Session::get('update_profile_msg') }}</p>
                        @endif

                        @if($profile_data) 

                            @if($profile_data->submitted == 1 )
                            <p class="alert alert-info">Profile Submitted Awaiting Admin Verification  <a href="{{route('edit_profile')}}" class="btn btn-sm btn-primary">Edit</a></p>
                            @endif

                        @endif

                       


                        <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group text-center">
                            <img id="previewImg2" style="height: 90px; width: 90px; object-fit: cover; border-radius: 20px;" class="shadow rounded-circle" src="{{config('app.url')}}avatars/{{$profile_data->users->avatar??'default.png'}}" >

                        </div> 

                      <div class="col-sm-5 mx-auto">
                        <div class="custom-file mb-5 mt-3 mx-auto">
                            <input onchange="previewFile3(this.id);" type="file" name="avatar" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload Avatar</label>
                            @error('avatar')
                            <span class="text-danger" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                            @enderror
                        </div>
                      </div>



                   



                        <div class="row">
                            <div class="col-md-6 ">

                                <div class="form-group ">
                                    <input type="text" class="form-control" name="managing_director_name" value="{{$profile_data->managing_director_name??''}}" placeholder="Enter name of Business Owner or Managing Director">
                                    
                                    @error('managing_director_name')
                                    <span class="text-danger text-mted" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_name" value="{{$profile_data->business_name??old('business_name')}}" placeholder="Enter Business Name">
                                    @error('business_name')
                                    <span class="text-dangertext-muted" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cac_no" value="{{$profile_data->cac_no??old('cac_no')}}" placeholder="Enter Business CAC No. (RC / PLC)">
                                    @error('cac_no')
                                    <span class="text-danger " role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_address"  value="{{$profile_data->business_address??old('business_address')}}" placeholder="Enter Business Address">
                                    @error('business_address')
                                    <span class="text-danger " role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_website" value="{{$profile_data->business_website??old('business_website')}}" placeholder="Enter Business Website">
                                    @error('business_website')
                                    <span class="text-danger " role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_email" value="{{$profile_data->business_email??old('business_email')}}"  placeholder="Enter Business Alternative Email Address">
                                    @error('business_email')
                                    <span class="text-danger " role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact_person" value="{{$profile_data->business_email??old('contact_person')}}"  placeholder="Enter Company Management Email Address (Contact Person)">
                                    @error('contact_person')
                                    <span class="text-danger " role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-md-6">

                          

                              

                                <div class="form-group">
                                    <img id="previewImg" style="height: 230px; width: 230px; object-fit: cover; border-radius: 20px;" class="shadow" src="{{config('app.url')}}company_uploads/{{$profile_data->company_profiles[0]->doc_path??'default.jpg'}}" >

                                </div> 

                                <div class="col-sm-6 col-md-10">

                                    <div class="custom-file mb-5 mt-3 ">
                                        <input onchange="previewFile4(this.id);" type="file" name="utility_bill" class="custom-file-input" id="customFile2">
                                        <label class="custom-file-label" for="customFile">Company Utility Bill</label>
                                        @error('utility_bill')
                                        <span class="text-danger" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                               

                            </div>
                        </div>

                        @if ($profile_data)

                        <div class="form-group col-md-6 mx-auto">
                            <button type="sumbit" class="btn btn-primary btn-block btn-lg"  {{$profile_data->submitted ==0?'':'disabled'}}>Submit</button>
                        </div>
                            
                        @else

                        <div class="form-group col-md-6 mx-auto">
                            <button type="sumbit" class="btn btn-primary btn-block btn-lg" >Submit</button>
                        </div>
                            
                        @endif



                       

                     
                          
                      
                        </form>  
                       
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>

<script>
    function previewFile4(chooser){
        console.log('hello');

        var file = $('#' + chooser).get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }

    function previewFile3(chooser){
        console.log('hello');

        var file = $('#' + chooser).get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg2").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }
</script>


@endsection