<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
        {{-- <title>{{ config('app.name', 'Cabinet') }}</title> --}}
        <title>@yield('title')</title>
    <!-- END title -->
    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
     <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{asset('css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />

</head>
<body id="page-top" class="">

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

     <!--   Core JS Files   -->
  <script src="{{ asset('js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
  <
</body>
</html>