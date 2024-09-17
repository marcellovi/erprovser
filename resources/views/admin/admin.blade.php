<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Admin Dashboard">
    <meta name="BigBits" content="Dashboard">

    <title>Dashboard - ERProserv</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/apexcharts.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/tooplate-mini-finance.css') }}" rel="stylesheet">

    <!-- datatable -->
    <link href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css" rel="stylesheet">


</head>


<body>

@include('admin.layouts.partials.header')

<div class="container-fluid">
    <div class="row">

        @include('admin.layouts.partials.navbar')

    <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-10 px-md-4 border-start">

        @yield('content')

        @include('admin.layouts.partials.footer')

    </main>

    </div>
</div>

<!-- include possible js scripts <script> -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- data table -->
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#data_careers');
</script>


</body>
</html>
