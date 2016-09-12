<!DOCTYPE html>
<html>
<head>
    <title>THE TEACH AND LEARN @yield('title') </title>
    <link rel="icon" href="images/icon.png" type="image/jpg" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::script('bootstrap/docs/assets/js/vendor/jquery.min.js') !!}
    {!! Html::script('bootstrap/docs/assets/js/vendor/tether.min.js') !!}

    <!-- bootstrap v4 -->
    {!! Html::style('bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::script('bootstrap/dist/js/bootstrap.js') !!}

    @yield('javascript')
    @yield('css')
</head>
<body>
@yield('navbar')

<div class="container">
    @yield('notification')
    @yield('content')
</div>

@yield('footer')
</body>
</html>