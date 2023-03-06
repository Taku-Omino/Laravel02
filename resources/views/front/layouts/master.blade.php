<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="expires" content="604800">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <title>@yield('title')ページ | Laravel</title>
    <meta name="description" content="aboutページのdescriptionです">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>
<body>
    @include('front.partial.header')

    @yield('main')

    @include('front.partial.footer')
</body>
</html>
