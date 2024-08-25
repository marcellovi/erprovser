<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Add css or js links/scripts -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet"/>
    <!-- end adding css or js -->

</head>
<body>

@include('admin.layouts.partials.navbar')

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.layouts.partials.sidebar')
    </div>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </main>
        @include('admin.layouts.partials.footer')
    </div>
</div>


<!-- include possible js scripts <script> -->

</body>
</html>
