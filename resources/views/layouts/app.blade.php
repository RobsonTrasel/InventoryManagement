<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page }} - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/white-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body class="white-content {{ $class ?? '' }}">
    @auth()
        <div class="wrapper">
            @include('layouts.navbars.sidebar')
            <div class="main-panel">
                @include('layouts.navbars.navbar')
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST" style="display: none">
            @csrf
        </form>
    @else
        @include('layouts.navbars.navbar')
        <div class="wrapper wrapper-full-page">
            <div class="full-page {{ $contentClass  ?? ''}}">
                <div class="content">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @endauth
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/js/white-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
