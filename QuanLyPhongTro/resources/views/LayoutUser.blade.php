<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{asset('public/fontend/User/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('public/fontend/User/css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/fontend/User/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/fontend/User/font-awesome/css/font-awesome.css')}}">
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" style="color: white;" href="{{URL::to('/header')}}">NQN Khách Hàng</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" >
          <ul class="nav navbar-nav side-nav" style="background-color:#000">
          <!-- <li>
              <a href="{{URL::to('/thongtin-canhan')}}" class="dropdown-toggle"><i class="fa fa-caret-square-o-down"></i> Thông tin</a>
          </li> -->
          <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/qly-phong')}}" class="dropdown-toggle"><i class="fa fa-home"></i> Phòng</a>
          </li>
          <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/qly-dich-vu')}}" class="dropdown-toggle"><i class="fa fa-star-half-o"></i> Dịch vụ</a>
          </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Phòng <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/them-phong')}}">Thêm phòng</a></li>
                <li><a href="{{URL::to('/qly-phong')}}">Quản lý phòng</a></li>
              </ul>
            </li> -->
            <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/qly-loai-phong')}}" class="dropdown-toggle"><i class="fa fa-plus-square"></i> Loại phòng</a>
            </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Loại phòng <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/them-loai-phong')}}">Thêm loại phòng</a></li>
                <li><a href="{{URL::to('/qly-loai-phong')}}">Quản lý loại phòng</a></li>
              </ul>
            </li> -->
            <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/chi-so-dien')}}" class="dropdown-toggle"><i class="fa fa-bolt"></i> Chỉ số điện</a>
            </li>
            <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/chi-so-nuoc')}}" class="dropdown-toggle"><i class="fa fa-tint"></i> Chỉ số nước</a>
            </li>
            <li>
              <a style="font-size: 15px; padding: 18px" href="{{URL::to('/qly-khu-vuc')}}" class="dropdown-toggle"><i class="fa fa-fire"></i> Khu vực</a>
            </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Khách trọ <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/them-khach-tro')}}">Thêm khách trọ</a></li>
                <li><a href="{{URL::to('/qly-khach-tro')}}">Quản lý khách trọ</a></li>
              </ul>
            </li> -->
            <li>
              <a style="font-size: 15px" href="{{URL::to('/qly-khach-tro')}}" class="dropdown-toggle"><i class="fa fa-user"></i> Khách trọ</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" style="color: White;" data-toggle="dropdown"><i class="fa fa-user"></i> 
                <?php
                  use Illuminate\Support\Facades\Session;
                  $name = Session::get('user_fullname');
                  if($name)
                  {
                    echo $name;
                  }
                ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/thongtin-user')}}"><i class="fa fa-user"></i>Thông tin đăng nhập</a></li>
                <li class="divider"></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-power-off"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
         
        </div>
</nav>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      @yield('content')
    </div>
  </div> 
</div>
</div>
    <script src="{{asset('public/fontend/User/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('public/fontend/User/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/fontend/User/js/morris/chart-data-morris.js')}}"></script>
    <script src="{{asset('public/fontend/User/js/tablesorter/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('public/fontend/User/js/tablesorter/tables.js')}}"></script>
</body>
</html>