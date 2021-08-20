<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="mt-5"></div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Main</li> --}}
              

                <li>
                    <a href="{{route('buyer.home')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

       


                <li>
                    <a href="{{route('buyer.profile')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('buyer.account')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Account</span>
                    </a>
                </li>

                <li>
                    <a href="r{{route('buyer.notifications')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Notifications</span>
                    </a>
                </li>

             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>