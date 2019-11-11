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
                <a class="sm-hidden text-white" href="{{url('/')}}/admin/dashboard">Haqeeqi</a>
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
                        <li><a href="{{url('/admin/category')}}">Add Category</a></li>
                       <!--  <li><a href="{{url('/admin/addimages')}}">Images</a></li>
                        <li><a href="{{url('/admin/addvideo')}}">Videos</a></li>
                     --></ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Facilities</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/admin/addservices')}}">Services</a></li>
                        <li><a href="{{url('/admin/addcourses')}}">Courses</a></li>
                        <li><a href="{{url('/admin/addproject')}}">Upcoming Projects</a></li>
                    </ul>
                </li>

                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">About</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/admin/addhistory')}}">History</a></li>
                        <li><a href="{{url('/admin/addmission')}}">Mission</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="{{url('/admin/addimam')}}">Imam</a></li>
                    </ul>
                </li> -->
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
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Manage Imam</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">Add Imam</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Manage Services</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">Add Service</a></li>
                            <li><a href="#">Settings</a></li>

                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Manage Courses <span class="label label-rouded label-danger pull-right">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">Add Courses</a></li>
                            <li><a href="#">Settings</a></li>
                                                </ul>
                    </li> -->

                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Manage Events</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="#">Add Event</a></li>
                              <li><a href="#">Settings</a></li>

                          </ul>
                      </li>
                      <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Manage News</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="#">Add News</a></li>
                              <li><a href="#">Settings</a></li>

                          </ul>
                      </li>
                      <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Manage Media</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="#">Add Media</a></li>
                              <li><a href="#">Settings</a></li>
                          </ul>
                      </li>

                      <li class="nav-small-cap">EXTRA COMPONENTS</li>
                      <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="layout-single-column.html">1 Column</a></li>
                              <li><a href="layout-fix-header.html">Fix header</a></li>
                              <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                              <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                              <li><a href="layout-boxed.html">Boxed Layout</a></li>
                              <li><a href="layout-logo-center.html">Logo in Center</a></li>
                          </ul>
                      </li>
                      <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages <span class="label label-rouded label-success pull-right">25</span></span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="starter-kit.html">Starter Kit</a></li>
                              <li><a href="pages-blank.html">Blank page</a></li>
                              <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                  <ul aria-expanded="false" class="collapse">
                                      <li><a href="pages-login.html">Login 1</a></li>
                                      <li><a href="pages-login-2.html">Login 2</a></li>
                                      <li><a href="pages-register.html">Register</a></li>
                                      <li><a href="pages-register2.html">Register 2</a></li>
                                      <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                      <li><a href="pages-recover-password.html">Recover password</a></li>
                                  </ul>
                              </li> -->
                <!-- <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-animation.html">Animation</a></li>
                            <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                            <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                            <li><a href="pages-search-result.html">Search result</a></li>
                            <li><a href="pages-scroll.html">Scrollbar</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs</a></li>
                            <li><a href="#" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-error-400.html">400</a></li>
                                    <li><a href="pages-error-403.html">403</a></li>
                                    <li><a href="pages-error-404.html">404</a></li>
                                    <li><a href="pages-error-500.html">500</a></li>
                                    <li><a href="pages-error-503.html">503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>
                            <li><a href="chart-echart.html">Echarts</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-extra-chart.html">Extra chart</a></li>
                            <li><a href="chart-peity.html">Peity Charts</a></li>
                        </ul>
                    </li> -->
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="icon-material.html">Material Icons</a></li>
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li> -->
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                    </li> -->
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">item 1.1</a></li>
                            <li><a href="#">item 1.2</a></li>
                            <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">item 1.3.1</a></li>
                                    <li><a href="#">item 1.3.2</a></li>
                                    <li><a href="#">item 1.3.3</a></li>
                                    <li><a href="#">item 1.3.4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">item 1.4</a></li>
                        </ul>
                    </li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
