<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('assets1') }}/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets1') }}/img/apple-icon.png">
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
<body class="full-screen login">
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('assets1') }}/img/sections/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Welcome</h3>
                            <form class="register-form" action="{{ route('login-processUSER') }}" method="post">
								@csrf
                                <label>Email</label>
                                <input type="email" class="form-control no-border" placeholder="Nhập Email" name="email">
                                <label>Password</label>
                                <input type="password" class="form-control no-border" placeholder="Nhập Mật Khẩu" name="mat-khau">
                                <button class="btn btn-danger btn-block btn-round">Đăng Nhập</button>
                            </form>
                            <br>
                            @if (Session::exists('error'))                               
                            <p class="btn btn-danger btn-block btn-round">{{ Session::get('error') }} </p>        
                            @endif
                            <div class="forgot">
                                <a href="{{ route('dangky') }}" class="btn btn-link btn-danger">Chưa Có Tài Khoản- Đăng Ký Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>

