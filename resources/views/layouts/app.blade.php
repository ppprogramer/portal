<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- css -->
    <link href="{{ asset('css/portal/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/layer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/layer.min.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('portal.footer')
</body>
<script src="{{ asset('/js/portal/jquery.min.js') }}"></script>
<script src="{{ asset('/js/portal/layer.min.js') }}"></script>
</html>
