<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="{{asset('public/backend/Admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type='text/css' media="all" href="{{asset('public/backend/Admin/css/style.css')}}">
<!-- /css -->
</head>
<body>

<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Official</h2>
		<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="content-agile2">
		<h1 class="w3ls">XIN CHÀO ADMIN</h1>
		<form action="{{URL::to('/login-admin')}}"method="post">
        {{ csrf_field() }}
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="tai_khoan" placeholder="Tài khoản" title="Please enter your First Name" required="">
			</div>
			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="mat_khau" placeholder="Mật khẩu" id="password2" required="">
			</div>			
			
			<input type="submit" class="register" value="Đăng nhập">
		</form>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>