<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang Chủ</title>
        <link rel="icon" type="image/x-icon" href="{{asset('public/fontend/assets/favicon.ico')}}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{asset('public/fontend/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/jquery.timepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontend/CssHome/css/style.css')}}">
    </head>
    <body class="d-flex flex-column h-100">

        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{URL::to('/index')}}">Nhà của tôi</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/index')}}">Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/information')}}">Thông tin</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/dangky')}}">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    <div class="container">
    @yield('content')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('public/fontend/js/scripts.js')}}"></script>
        <script src="{{asset('public/fontend/CssHome/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/popper.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/aos.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('public/fontend/CssHome/js/google-map.js')}}"></script>
    <script src="{{asset('public/fontend/CssHome/js/main.js')}}"></script>
    </body> 
</html>
