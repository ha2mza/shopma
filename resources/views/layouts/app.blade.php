<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{ app()->getLocale() }}" class="ie8">
<![endif]-->
<!--[if IE 9]>
<html lang="{{ app()->getLocale() }}" class="ie9">
<![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <link rel="icon" type="image/ico" href="{{ asset('images/4me-icon-gdpr.png') }}"/>
    <!-- Title -->
    <title>{{ config('app.name','GDPR') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    @yield('content')
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('plugins/popper/popper.min.js') }} "></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }} "></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }} "></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }} "></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }} "></script>
<!--stickey kit -->
<script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }} "></script>
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }} "></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }} "></script>
<!-- ============================================================== -->
@yield('js')
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }} "></script>

</body>
</html>
