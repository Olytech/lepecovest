@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

     

        <!-- start page title -->
      
        <!-- end page title -->

      <div class="card col-md-10 mx-auto shadow">
          <div class="card-body">
              <h4 class="text-center">Please update profile to proceed</h4>

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets9.lottiefiles.com/packages/lf20_rw0hvilj.json"  background="transparent"  speed="1"  style="max-width: 400px; max-height: 400px; "  class="mx-auto text-center" loop  autoplay></lottie-player>


            <div class="c text-center">
                <a href="{{route('partner.profile')}}" class="btn btn-success btn-lg shadow">Update Profile</a>
            </div>




          </div>
      </div>
        </div>
        <!-- end row -->

       
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection