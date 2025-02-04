<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Travel Tour</title>

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

<body>
    @include('layout1.header')
    @yield('content')
    @include('layout1.footer')

</body>

<!-- Core JS Files -->
<script src="{{ asset('assets1') }}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/popper.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="{{ asset('assets1') }}/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="{{ asset('assets1') }}/js/nouislider.js"></script>

<!--  Photoswipe files -->
<script src="{{ asset('assets1') }}/js/photo_swipe/photoswipe.min.js"></script>
<script src="{{ asset('assets1') }}/js/photo_swipe/photoswipe-ui-default.min.js"></script>
<script src="{{ asset('assets1') }}/js/photo_swipe/init-gallery.js"></script>

<!--  Plugins for Select -->
<script src="{{ asset('assets1') }}/js/bootstrap-select.js"></script>

<!--  for fileupload -->
<script src="{{ asset('assets1') }}/js/jasny-bootstrap.min.js"></script>

<!--  Plugins for Tags -->
<script src="{{ asset('assets1') }}/js/bootstrap-tagsinput.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="{{ asset('assets1') }}/js/moment.min.js"></script>
<script src="{{ asset('assets1') }}/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{ asset('assets1') }}/js/paper-kit.js?v=2.1.0"></script>
<script src="{{asset('assets')}}/js/validatebinhluan.js"></script>
<script src="{{asset('assets')}}/js/validatethanhtoan.js"></script>
<script src="{{asset('assets')}}/js/validatenhantin.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
       demo.initFullCalendar();
    });
</script>
</html>
