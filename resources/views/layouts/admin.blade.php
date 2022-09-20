<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- <base href="public/"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('sweetalert::alert')
    <div class="wrapper ">
        @include('layouts.inc.adminpanel.sidebar')
        <div class="main-panel">
            @include('layouts.inc.adminpanel.navbar')
            <div class="content">
                @yield('content')
            </div>
           @include('layouts.inc.adminpanel.footer')
        </div>
    </div>
    
    {{-- core js --}}
    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>

    @yield('scripts')

</body>
</html>
