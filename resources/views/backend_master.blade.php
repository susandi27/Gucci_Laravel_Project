<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gucci Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('backend_assets/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend_assets/assets/vendors/css/vendor.bundle.base.css') }}">
  
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('backend_assets/assets/css/style.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('backend_assets/assets/images/favicon.ico')}}" />







</head>
<body>
  <div class="container-scroller">
    <!-- Navigation -->
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('dashboardpage') }}">Gucci</a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('dashboardpage') }}">Gucci</a>
        {{-- <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('backend_assets/assets/images/logo.svg')}}" alt="logo" /></a> --}}
        {{-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('backend_assets/assets/images/logo-mini.svg')}}" alt="logo" /></a> --}}
      </div>
      
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>

        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              {{-- <div class="nav-profile-img">
                <img src="#" alt="image">
                <span class="availability-status online"></span>
              </div> --}}
              <div class="nav-profile-text">
                <p class="mb-1 text-black">
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                  {{ Auth::user()->name }}
              </p>
              </div>
            </a>

            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              {{-- <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a> --}}
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                    <form id="logout-form" action="{{  route('logout') }} " method="POST" class="d-none">
                      @csrf
                    </form>
              </div>
              </li>
              <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count-symbol bg-warning"></span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{ asset('backend_assets/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                    </div>
                    
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{asset('backend_assets/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{asset('backend_asset/assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                      <p class="text-gray mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                      <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                      <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                      <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
              </li>
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-power"></i>
                </a>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-format-line-spacing"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- end Navigation -->

        <!-- sidebar -->
        <div class="container-fluid page-body-wrapper">
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              {{-- <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="{{asset('backend_assets/assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                   <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                  </div> 
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboardpage')}}">

                  <span class="menu-title {{ Request::is('dashboard') ? 'active' : '' }}"><i class="mdi mdi-home menu-icon"></i> Dashboard</span>
                  
                </a>
              </li>


              {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                
                <span class="menu-title">Invoice</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i> --}}
               {{--  </a>
                <div class="collapse" id="ui-basic1">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('categories.create')}}">Create</a>
                    </li>
                  </ul>
                </div>
              </li> --}} 


              {{-- order --}}
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                  <span class="menu-title {{ Request::is('orders*') ? 'active' : '' }}">
                    <i class="mdi mdi-bell-outline"></i> Orders</span>
                </a>
                <div class="collapse" id="ui-basic2">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('orders.index')}}"> Order List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('orderconfirmpage')}}">Confirm</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('orderhistorypage')}}">Order History</a></li>
                  </ul>
                </div>
              </li>
              {{-- end Order --}}

              {{-- Product --}}
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">

                <span class="menu-title {{ Request::is('products*') ? 'active' : '' }}">
                  <i class="mdi mdi-basket"></i>  Product</span>
                </a>
                <div class="collapse" id="ui-basic3">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">Product List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('products.create')}}">Create</a></li>
                  </ul>
                </div>
              </li>
              {{-- end product --}}

              <!-- Category -->
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                
                <span class="menu-title {{ Request::is('categories*') ? 'active' : '' }}">
                  <i class="mdi mdi-animation"></i> Category</span>
                  {{-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> --}}
                </a>
                <div class="collapse" id="ui-basic4">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('categories.create')}}">Create</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- end category -->

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                
                <span class="menu-title {{ Request::is('deliveries*') ? 'active' : '' }}">
                <i class="mdi mdi-bike"> </i> Delivery</span>
                  
                  {{-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> --}}
                </a>
                <div class="collapse" id="ui-basic5">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('deliveries.index')}}">List</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{route('deliveredpage')}}">Delivered</a>
                    </li>
                  </ul>
                </div>
              </li>



              
              {{-- <li class="nav-item">
                <a class="nav-link" href="pages/icons/mdi.html">
                  <span class="menu-title">Form</span>
                  <i class="mdi mdi-contacts menu-icon"></i>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                  <span class="menu-title">Charts</span>
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                  <span class="menu-title">Tables</span>
                  <i class="mdi mdi-table-large menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-title">Sample Pages</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-medical-bag menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item sidebar-actions">
                <span class="nav-link">
                  <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                  </div>
                  <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                  <div class="mt-4">
                    <div class="border-bottom">
                      <p class="text-secondary">Categories</p>
                    </div>
                </span>
              </li> --}}
            </ul>
          </nav>
                 
          <!-- content -->
          <div class="main-panel">
            @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
                           
        </div>  <!-- partial -->               
      </div>  <!-- main-panel ends -->               
    </div> <!-- page-body-wrapper ends -->

    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 Designed By SK
        </span>
      </div>
    </footer> 
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('backend_assets/assets/vendors/js/vendor.bundle.base.js') }}"></script>
                    <!-- endinject -->
                    <!-- Plugin js for this page -->
    <script src="{{asset('backend_assets/assets/vendors/chart.js/Chart.min.js') }}"></script>
                    <!-- End plugin js for this page -->
                    <!-- inject:js -->
    <script src="{{asset('backend_assets/assets/js/off-canvas.js') }} "></script>
    <script src="{{asset('backend_assets/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{asset('backend_assets/assets/js/misc.js') }}" ></script>
                    <!-- endinject -->
                    <!-- Custom js for this page -->
    <script src="{{asset('backend_assets/assets/js/todolist.js') }}"></script>
                  <!-- End custom js for this page -->
    <script src="{{ asset('backend_assets/assets/js/file-upload.js') }}"></script>


    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>






  </body>
</html>