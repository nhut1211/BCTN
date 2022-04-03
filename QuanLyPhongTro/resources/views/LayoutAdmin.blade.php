<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Admin</title>
    <link href="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/QuanlyAdmin/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">
                            <img src="{{asset('public/backend/QuanlyAdmin/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />                           
                        </b>
                        <span class="logo-text">
                             <img src="{{asset('public/backend/QuanlyAdmin/assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('public/backend/QuanlyAdmin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('/qly-hop-dong')}}" aria-expanded="false"><i class="mdi mdi-content-paste"></i><span class="hide-menu">Hợp đồng</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('/qly-tai-khoan')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Tài khoản khách hàng</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-redo-variant"></i><span class="hide-menu">Đăng xuất</span></a></li>                     
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div> 
    </div>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/dist/js/waves.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('public/backend/QuanlyAdmin/dist/js/pages/chart/chart-page-init.js')}}"></script>
</body>
</html>