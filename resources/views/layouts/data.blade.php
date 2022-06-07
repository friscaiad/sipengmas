<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengmas</title>
    <link rel="stylesheet" href="{{ asset('css/bs.css') }}">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <style>
        .filter-hide {
            display: none
        }
    </style>
</head>

<body>
    @include('partials.topbar')
    <div class="container-fluid" style="margin-top: 4%">
        <div class="row g-0">
            @include('partials.filterdata')
            @yield('contain')
        </div>
    </div>
</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bs.js') }}"></script>
</html>
