<header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header" style="background-color: transparent;
            color: #fff;">
                <!-- <a class="navbar-brand" href="{{url('/admin/dashboard')}}"> -->
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    {{-- <img src="{{url('/admin_asset')}}/images/logo-icon.png" alt="homepage" class="dark-logo" /> --}}
                    <!-- Light Logo icon -->
                    {{-- <img src="{{url('/admin_asset')}}/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    --}}
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                    <!-- dark Logo text -->
                <a class="sm-hidden text-white" href="{{url('/')}}/admin">Haqeeqi</a>
                    <!-- Light Logo text -->
                    {{-- <img src="{{url('/admin_asset')}}/images/logo-light-text.png" class="light-logo" alt="homepage"
                    /></span> </a> --}}
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                            href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a
                            class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                            href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
    
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
    
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
    
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                   <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome,
                            </a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @if(Auth::check()) 
                   {{Auth::user()->username}}
                    </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <!-- <div class="u-img"><img src="{{url('/')}}/uploads/avatars/{{Auth::user()->avatar}}" alt="user"></div> -->
                                            <div class="u-text">
                                            <h4>{{Auth::user()->username}}</h4>
                                            <p class="text-muted">{{Auth::user()->email}}</p>
                                            {{-- <a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a> --}}
                                        </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                <li><a href="{{url('/')}}/admin/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                            @endif  
                        </li>
                </ul>
            </div>
        </nav>
    </header>
    
    
    
    
    
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
    
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a class="waves-effect waves-dark" href="{{url('/')}}/admin/dashboard">
                        <i class="mdi mdi-checkbox-multiple-blank"></i><span class="hide-menu">Dashboard</span></a>

                </li>
                <!-- <li class="nav-small-cap">PERSONAL</li> -->
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Manage Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/admin/users')}}">All User</a></li>
                        <!-- <li><a href="{{url('/admin/changerole')}}">Change User Role</a></li> -->
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Manage Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!-- <li><a href="{{url('/admin/category')}}">Add Category</a></li> -->
                        <li><a href="{{url('/admin/managecategory')}}">Main Category</a></li>
                         <li><a href="{{url('/admin/subcategory')}}">Sub Category</a></li>
                       
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Facilities</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/admin/addservices')}}">Services</a></li>
                        <li><a href="{{url('/admin/addcourses')}}">Courses</a></li>
                        <li><a href="{{url('/admin/addproject')}}">Upcoming Projects</a></li>
                    </ul>
                </li>

              
                <li> <a class="waves-effect waves-dark" href="{{url('/admin/addpost')}}">
                        <i class="mdi mdi-blogger"></i><span class="hide-menu">Blog Posts</span></a>

                </li>
                <li> <a class="waves-effect waves-dark" href="{{url('/admin/addimam')}}">
                        <i class="mdi mdi-account"></i><span class="hide-menu">Manage Team</span></a>

                </li>
                 <li> <a class="waves-effect waves-dark" href="{{url('/admin/database_backup')}}">
                        <i class="mdi mdi-database"></i><span class="hide-menu">Database Backup </span></a>
    
                </li>
                {{-- <li> <a class="waves-effect waves-dark" href="{{url('/admin/front-page')}}">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">Front Page </span></a>

                </li> --}}
                <li> <a class="waves-effect waves-dark" href="{{url('/admin/logout')}}">
                        <i class="mdi mdi-power"></i><span class="hide-menu">Logout </span></a>

                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
   
    