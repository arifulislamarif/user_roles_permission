
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend') }}/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    @yield('style')

    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('backend') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('backend') }}/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="@yield('user')">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>User</span></a>
                                <ul class="collapse">
                                    <li class="@yield('roles')"><a href="{{ route('roles.index') }}">Roles</a></li>
                                    <li><a href="index3.html">SEO dashboard</a></li>
                                </ul>
                            </li>
                            <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li class="">
                                <div class="user-profile pull-right">
                                    <img class="avatar user-thumb" src="{{ asset('backend') }}/assets/images/author/avatar.png" alt="avatar">
                                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></h4>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Message</a>
                                        <a class="dropdown-item" href="#">Settings</a>
                                        <a class="dropdown-item" href="#">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
                @yield('content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('backend') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.slicknav.min.js"></script>
    @yield('script')
    <!-- others plugins -->
    <script src="{{ asset('backend') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('backend') }}/assets/js/scripts.js"></script>

</body>

</html>
