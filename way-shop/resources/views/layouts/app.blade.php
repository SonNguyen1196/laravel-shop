<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" ></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{ asset('admin_assets/assets/dist/img/ico/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="{{asset('admin-assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin-assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/vendors/toastr/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/css/main.min.css')}}" rel="stylesheet" />

    @yield('style')

</head>
<body>
<div id="app">
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
</div>

<script src="{{asset('admin-assets/vendors/jquery/dist/jquery.min.js')}}"></script>
{{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>--}}
<script src="{{asset('admin-assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/metisMenu/dist/metisMenu.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/jquery-idletimer/dist/idle-timer.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/toastr/toastr.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin-assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<!-- PAGE LEVEL PLUGINS-->
<!-- CORE SCRIPTS-->
<script src="{{ asset('admin-assets/js/app.min.js') }}"></script>



@yield('script')
</body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
</html>

