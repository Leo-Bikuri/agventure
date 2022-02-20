<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('veggies1.ico')}}">

    @include('includes.links')
</head>
<body>
@include('includes.topnav')
@include('includes.bottomnav')
@yield('carousel')
@include('includes.scripts')
</body>
</html>
