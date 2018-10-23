<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset/Admin/assets/img/uin.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('asset/Admin/assets/img/uin.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kehadiran PTIPD</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('asset/Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('asset/Admin/assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('asset/Admin/assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('asset/Admin/assets/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('asset/Admin/assets/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>


<div class="wrapper">
    <div class="main-panel">
        @include('materials.head')
        @include('materials.side')
        @yield('content')
        @include('materials.foot')
    </div>
</div>




</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('asset/Admin/assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('asset/Admin/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('asset/Admin/assets/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('asset/Admin/assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('asset/Admin/assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('asset/Admin/assets/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('asset/Admin/assets/js/demo.js') }}"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function(){
    
            demo.initChartist();
    
            $.notify({
                icon: 'ti-gift',
                message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
    
            },{
                type: 'success',
                timer: 4000
            });
    
        });
    </script> --}}
</html>
