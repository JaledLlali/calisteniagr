<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @media screen and (max-width: 480px) {
            .home-background {
                background-image: url("{{asset('img/home/street-workout-ge66ad7c91_1920.jpg')}}");
            }
        }
        @media screen and (min-width: 480px) {
            .home-background {
                background-image: url('{{asset('img/home/street-workout-2628904_1920.jpg')}}');
            }
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')


    @include('layouts.partials.footer')
</body>
</html>

