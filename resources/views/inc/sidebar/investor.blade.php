<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="mt-5"></div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Main</li> --}}
              

                <li>
                    <a href="{{route('partner.home')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

       


                <li>
                    <a href="{{route('partner.profile')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
            
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Listings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('partner.create_listing')}}">Create Listing</a></li>
                        <li><a href="{{route('partner.listings')}}">All Listings</a></li>
                        <li><a href="">Published</a></li>
                        <li><a href="">Submitted</a></li>
                        <li><a href="">Disapproved</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('partner.notifications')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">0</span>
                        <span>Notifications</span>
                    </a>
                </li>

             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>