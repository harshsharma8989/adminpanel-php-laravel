
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="C:\xampp\htdocs\ashwat\dashpractice\public\frontend\LOGO13" class="simple-text logo-mini">
           {{-- add icon and name --}} 
        </a>
        <a href="/" class="simple-text logo-normal">
          <h5 style = "color:black;">Go Easy</h5>
          
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
      <style>
      
      p{
            font-size:11px;
            font-weight: 700;
      } 
        </style>
        <ul class="nav">
          <li class="{{'dashboard.html'==request()->path() ? 'active':'' }}">
            <a href="/dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p style = "color:black">Dashboard</p>
            </a>
          </li>
          <li class="{{'dispute'==request()->path() ? 'active':'' }}">
            <a href="/dispute">
              <i class="now-ui-icons education_atom"></i>
              <p style = "color:black">dispute</p>
            </a>
          </li>
          <li class="{{'map'==request()->path() ? 'active':'' }}">
            <a href="/map">
              <i class="now-ui-icons location_map-big"></i>
              <p style = "color:black">Maps</p>
            </a>
          </li>
          <li class= "{{'heat map'==request()->path() ? 'active':'' }}">
            <a href="heatmap">
              <i class="now-ui-icons location_map-big"></i>
              <p style = "color:black">Heat Map</p>
            </a>
          </li>
          <li class="{{'service'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">service</p>
            </a>
          </li>
          <li class="{{'List document'==request()->path() ? 'active':'' }}">
            <a href="/documents">
              <i class="now-ui-icons users_single-02"></i>
              <p style = "color:black">List document</p>
            </a>
          </li>
          <li class="{{'notification'==request()->path() ? 'active':'' }}" ">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black;">notification </p>
            </a>
          </li>
          <li class="{{'cancel reasons'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Cancel request</p>
            </a>
          </li>
          <li class="{{'banner'==request()->path() ? 'active':'' }}">
            <a href="/banner">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Banner</p>
            </a>
          </li>

          {{-- <li class="menu-title">Members</li> --}}

          <li class="{{'Roles'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Roles</p>
            </a>
          </li>
          <li class="{{'user'==request()->path() ? 'active':'' }}">
            <a href="/user">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">user</p>
            </a>
          </li>
          <li class="{{'provider'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p  style = "color:black">provider</p>
            </a>
          </li>
          <li class="{{'dispatcher'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">dispatcher</p>
            </a>
          </li>
          <li class="{{'account manager'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Account manager</p>
            </a>
          </li>
          <li class="{{'dispute manager'==request()->path() ? 'active':'' }}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Dispute manager</p>
            </a>
          </li>
          {{-- <li class="menu-title">Accounts</li> --}}
          
         
          <li>
              <div class="btn-group dropright">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              statement
              </button>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="#">overall statement requirement</a>
              <a class="dropdown-item" href="#">provider statement</a>
              <a class="dropdown-item" href="#">user statement</a>
              <a class="dropdown-item" href="#">daily statement</a>
              <a class="dropdown-item" href="#">monthly statement</a>
              <a class="dropdown-item" href="#">yearly statement</a>
            </div>
          </div>
          </li>
        <div class="btn-group dropright">
          <button type="button" class="btn btn- dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          settlements
          </button>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="#"style = "color:black" >provider settlements</a>
              <a class="dropdown-item" href="#">all settlements</a>
            </div>
          </div>
        </a>
          {{-- <li class="menu-title">details</li> --}}
          <li>
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p style = "color:black">Details </p>
            </a>
          </li>
          
          <li class="">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p style = "color:black">Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>

            <ul class="navbar-nav">
              {{--<li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>--}}
           {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>--}}
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>--}}
      </nav> 
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm" > 
      </div>
      <div class="content">
          @yield('content')
    </div>
      
      <footer class="footer">
        <div class=" container-fluid ">
        
          <nav>
            <ul>
              <li>
                <a href="https://www.goeasyservices.in">
                  go easy
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.goeasyservices.in" target="_blank">go easy</a>. Coded by <a href="https://www.goeasyservices.in" target="_blank">Goeasyservices.in</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  @yield('footer')
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('script')
</body>

</html>