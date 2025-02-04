<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('assets1') }}/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Kit 2 PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="{{ asset('assets1') }}/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('assets1') }}/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
	<link href="{{ asset('assets1') }}/css/demo.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset('assets1') }}/css/nucleo-icons.css" rel="stylesheet">

</head>
<body class="full-screen register">
	

    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('assets1') }}/img/sections/soroush-karimi.jpg');">
            <div class="filter"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-7 col-12 ml-auto">
							<div class="info info-horizontal">
								<div class="icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="description">
									<h3> Đăng Ký Tài Khoản Để Đặt Tour</h3>
									
								</div>
							</div>
							<div class="info info-horizontal">
								<div class="icon">
									<i class="fa fa-map-signs"></i>
								</div>
								<div class="description">
									<h3> Điền Chính Xác Thông Tin</h3>
									
								</div>
							</div>
							<div class="info info-horizontal">
								<div class="icon">
									<i class="fa fa-user-secret"></i>
								</div>
								<div class="description">
									<h3> Bảo Mật Thông Tin Của Bạn</h3>
									
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-5 col-12 mr-auto">
							<div class="card card-register">
								<h3 class="card-title text-center">Đăng Ký</h3>
								<div class="social">
					
								</div>

								<form class="register-form" method="post" action="{{ route('dangky-process') }}">
									@csrf
									<input type="text" class="form-control" placeholder="Nhập Họ Tên" name="ten" required>
									<input type="text" class="form-control" placeholder="Email" name="email" required>

									<input type="password" class="form-control" placeholder="Mật Khẩu" required>
									<input type="password" class="form-control" placeholder="Xác Nhận Mật Khẩu" name="mat-khau" required>
									<input type="text" class="form-control" placeholder="SĐT" name="sdt" required>
									<input type="text" class="form-control" placeholder="Địa Chỉ" name="diachi" required>
									<button class="btn btn-block btn-round">Đăng Ký</button>
								</form>
								<div class="login">
									<p>Bạn Đã Có Tài Khoản <a href="{{ route('loginUSER') }}">Đăng Nhập</a>.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
          
        </div>
    </div>

</body>

<!-- Core JS Files -->
<script src="{{ asset('assets1') }}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/popper.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugins for Select -->
<script src="{{ asset('assets1') }}/js/bootstrap-select.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="{{ asset('assets1') }}/js/moment.min.js"></script>
<script src="{{ asset('assets1') }}/js/bootstrap-datetimepicker.min.js"></script>

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets1') }}/js/paper-kit.js?v=2.1.0"></script>
</html>
