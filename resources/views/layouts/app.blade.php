<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RPL-Profile') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />

    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('sweet-alert2/css/sweetalert2.min.css') }}">

    {{-- Custom --}}
    @if(Auth::check())
    <!-- CSS Files -->
    <link href="{{ asset('light/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('light/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css"></style>
    @endif

    {{-- App.css --}}
    @yield('css')

    @if(!Auth::check())
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
    @endif

    {{-- Ngubah warna icon font-awesome --}}
    <style type="text/css">
        i.fa {
            color: #000;
        }
    </style>
</head>
<body>
@include('layouts.loader');
<div id="app @if(Auth::check()) ? 'wrapper' : '' @endif">
    @if(Auth::check())
        @include('layouts.navbar-admin');
    @else
        @yield('content')
    @endif
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('light/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>

    {{-- Loader --}}
    <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
    
    {{-- Alert --}}
    <script src="{{ asset('sweet-alert2/js/sweetalert2.js') }}"></script>
    
    @include('layouts.messages')

    {{-- Custom --}}
    @if(Auth::check())
    <script src="{{ asset('light/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light/js/plugins/bootstrap-switch.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light/js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
    @endif
</body>
</html>
