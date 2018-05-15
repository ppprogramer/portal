<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <!-- css -->
    <link href="{{ asset('css/portal/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/layer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal/layer.min.css') }}" rel="stylesheet">
</head>
<body>
@include('portal.header')
@yield('content')
@include('portal.footer')

<script>
    // 打开协议
    function openarticle(type,title){
        layer.open({
            type: 2,
            title: title,
            shadeClose: true,
            shade: 0.8,
            area: ['500px', '90%'],
            content: '/portal/frame/article/type?type='+type //iframe的url
        });
    }
</script>
</body>
<script src="{{ asset('js/portal/jquery.min.js') }}"></script>
<script src="{{ asset('js/portal/layer.min.js') }}"></script>
<script src="{{ asset('js/portal/bootstrap.min.js') }}"></script>
</html>